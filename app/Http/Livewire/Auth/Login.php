<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use TypeError;

class Login extends Component
{
  /**
   * Login function
   *
   */
  # public variables
  public $email, $password, $remember_me;
  
  # function
  public function login()
  {
    $this->validate([
      'email' => 'required',
      'password'=> 'required|min:6'
    ]);

    try {
      if (Auth::attempt(['email' => $this->email, 'password'=>$this->password], $this->remember_me)) {
        $this->loginSuccessMsg();
      }elseif (Auth::attempt(['phone'=>$this->email, 'password'=>$this->password], $this->remember_me)) {
        $this->loginSuccessMsg();
      }elseif (Auth::attempt(['username' => $this->email, 'password' => $this->password], $this->remember_me)) {
        $this->loginSuccessMsg();
      }else {
        $this->addError('loginFailed', "These credentials doesn't match our records");
      }
    } catch (Exception $e) {
      $this->addError('loginFailed', "Please check your internet connection and try again.");
    } catch (TypeError $e) {
      $this->addError('loginFailed', 'Please Enter valid creadentials');
    }
  }

  # redirect login success message
  public function loginSuccessMsg()
  {
    $user = User::where('username', $this->email)->orWhere('email', $this->email)->orWhere('phone', $this->email)->first();
    Auth::login($user);
    session()->flash("loginSuccess", "Login successful. You will be redirected within few moments.");
    $this->dispatchBrowserEvent("loginSuccess");
  }

  /**
   * Render function
   */
  public function render()
  {
    return view("livewire.auth.login")->layout("layouts.master");
  }
}
