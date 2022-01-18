<?php

namespace App\Http\Livewire\Backend\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ResetPassword extends Component
{
  #public variables
  public $auth_username, $user;

  /**
   * Mount function
   */
  public function mount($username)
  {
    $this->auth_username = $username;
    $this->user = User::where('username', $this->auth_username)->first();
  }

  /**
   * Reset password function
   */
  #public variables
  public $newPassword, $confirmPassword;

  #reset function
  public function ResetPassword()
  {
    $this->validate([
      'newPassword' => 'required_with:confirmPassword|min:6|max:20|same:confirmPassword',
      'confirmPassword' => 'required'
    ]);
    User::where('username', $this->auth_username)->update([
      'password' => Hash::make($this->confirmPassword)
    ]);
    session()->flash('success', 'Password has been reset successfuly');
    if (Auth::check()) {
      Auth::logout();
    }
    return redirect()->intended()->route('login', app()->getLocale());
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.auth.reset-password');
  }
}
