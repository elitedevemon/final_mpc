<?php

namespace App\Http\Livewire\Backend\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class VerifyEmail extends Component
{
  #public variables
  public $authDetails, $auth_username;

  /**
   * Mount function
   */
  public function mount($username)
  {
    $this->auth_username = $username;
    $this->authDetails = User::where('username', $this->auth_username)->first();
  }

  /**
   * Login function
   */
  #public variables for login
  public $username, $password;

  #filter credentials
  public function loginCredentials()
  {
    $this->validate([
      'username'=>'required',
      'password'=>'required|min:6'
    ]);
  }

  #login function
  public function login()
  {
    $this->loginCredentials();
    if ($this->username == $this->authDetails->username || $this->username == $this->authDetails->email || $this->username == $this->authDetails->phone) {
      if (Hash::check($this->password, $this->authDetails->password)) {
        User::where('username', $this->auth_username)->update([
          'email_verified_at' => now()
        ]);
        dd('done');
      }else {
        dd('password wrong');
      }
    }else {
      dd('username wrong');
    }
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.auth.verify-email');
  }
}
