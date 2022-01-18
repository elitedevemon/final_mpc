<?php

namespace App\Http\Livewire\Backend\Auth;

use App\Mail\ForgotPassword as MailForgotPassword;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ForgotPassword extends Component
{
  #public variables
  public $auth_username, $user, $allowRecoveryMail, $email;

  /**
   * Mount function
   */
  public function mount($username)
  {
    $this->auth_username = $username;
    $this->user = User::where('username', $this->auth_username)->first();
  }

  protected $rules=[
    'email'=>'required'
  ];

  /**
   * Send Email for reset password
   */
  public function ResetPassword()
  {
    $this->validate();
    if ($this->email == $this->user->email) {
      $details = [
        'title' => 'Reset Your Forgotten Password',
        'body' => 'Please click the following link to reset your password. Thank you.',
        'username' => $this->auth_username
      ];
      Mail::to($this->email)->send(new MailForgotPassword($details));
      session()->flash('sent', 'A password reset link has been sent to your email');
    }else {
      $this->addError('wrongEmail', 'You have entered a wrong email');
    }
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.auth.forgot-password');
  }
}
