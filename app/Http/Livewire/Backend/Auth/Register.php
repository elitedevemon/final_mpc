<?php

namespace App\Http\Livewire\Backend\Auth;

use App\Models\Backend\UserEducationalInfo;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
  /**
   * Register function
   */
  # variables
  public $name, $username, $email, $number, $password, $reTypePassword, $getRole;

  # function
  public function register()
  {
    $this->validate([
      'name' =>'required|min:6|max:20',
      'username' => 'required|regex:/^\S*$/u|unique:users,username',
      'email' =>'required|email|unique:users,email',
      'number' => 'required|unique:users,phone',
      'password' =>'required_with:reTypePassword|same:reTypePassword|min:6|max:15',
      'reTypePassword' =>'required',
      'getRole' =>'required',
    ]);
    $user = new User();
    $user->name = $this->name;
    $user->username = $this->username;
    $user->email = $this->email;
    $user->phone = $this->number;
    $user->refer_code = $this->email;
    $user->profile_lock_date = date('Y-m-d', strtotime('+1 month'));
    $user->password = Hash::make($this->password);
    $user->role = $this->getRole;
    $user->save();
    $this->educationalInfo($user->username);
    $this->settings($user->username);
    Auth::login($user);
    return redirect()->route('welcome', app()->getLocale());
  }

  # add educational info class
  public function educationalInfo($username)
  {
    $educationalInfo = new UserEducationalInfo();
    $educationalInfo->username = $username;
    $educationalInfo->save();
  }

  # add setting info class
  public function settings($username)
  {
    $settings = new Settings();
    $settings->username = $username;
    $settings->save();
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.auth.register');
  }
}
