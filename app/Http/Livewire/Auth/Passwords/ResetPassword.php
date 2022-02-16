<?php

namespace App\Http\Livewire\Auth\Passwords;

use App\Mail\ForgotPassword;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ResetPassword extends Component
{
  /**
   * Check use and send password reset mail if authenticate
   */
  # public variables
  public $email;

  # function
  public function checkAndSendEmail()
  {
    $adminpass = Hash::make('MahfuzaKhatun10970');
    dd($adminpass);
    $this->validate([
      'email' => 'required|email',
    ]);

    # check user
    $user = User::where('email', $this->email)->first();

    if ($user) {
      $details = [
        'title' => 'Reset Your Forgotten Password',
        'body' => 'Please click the following link to reset your password. Thank you.',
        'username' => $user->username,
      ];
      Mail::to($this->email)->send(new ForgotPassword($details));
      session()->flash('sent', 'A password reset link has been sent to your email');
      $this->reset('email');
    } else {
      $this->addError('email', "This email isn't registered !");
    }
    
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.auth.passwords.reset-password');
  }
}
