<?php

namespace App\Http\Livewire\Backend\Teacher;

use App\Mail\EmailVerifyMail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class Settings extends Component
{
  use WithFileUploads;
  #public variables for changing password
  public $current_password, $new_password, $confirm_password, $showPass, $profile_image, $time;

  #public variables for changing basic information
  public $name, $username, $email, $phone, $address, $city, $post_code, $country, $facebook, $google_plus,  $twitter, $pinterest, $about;

  public function mount()
  {
    $user = User::where('id', Auth::user()->id)->first();
    $this->name = $user->name;
    $this->username = $user->username;
    $this->email = $user->email;
    $this->phone = $user->phone;
    $this->address = $user->address;
    $this->city = $user->city;
    $this->post_code = $user->post_code;
    $this->country = $user->country;
    $this->facebook = $user->facebook;
    $this->google_plus = $user->google_plus;
    $this->twitter = $user->twitter;
    $this->pinterest = $user->pinterest;
    $this->about = $user->about;
  }

  /**
   * Change basic information function
   */
  public function ChangeBasicInfo()
  {
    $user = User::where('id', Auth::user()->id)->first();
    $user->name = $this->name;
    $user->username = $this->username;
    $user->email = $this->email;
    $user->phone = $this->phone;
    $user->address = $this->address;
    $user->city = $this->city;
    $user->post_code = $this->post_code;
    $user->country = $this->country;
    $user->facebook = $this->facebook;
    $user->google_plus = $this->google_plus;
    $user->twitter = $this->twitter;
    $user->pinterest = $this->pinterest;
    $user->about = $this->about;
    $user->save();
    session()->flash('basic_info_update', 'Your profile information has been updated');
  }

  #filter input
  protected $rules=[
    'current_password' => 'required',
    'new_password' => 'required|min:6',
    'confirm_password' => 'required'
  ];

  /**
   * Update password function
   */
  public function UpdatePassword()
  {
    $this->validate();
    if (Hash::check($this->current_password, auth()->user()->password)) {
      if ($this->new_password == $this->confirm_password) {
        User::where('id', auth()->user()->id)->update([
          'password'=>Hash::make($this->confirm_password)
        ]);
        session()->flash('password_updated', "Your password has been updated successfully. Now your current password is '$this->confirm_password'. Please copy this because you won't be able to see this again.");
      }else {
        $this->addError('confirm_password', "Confirm password didn't match");
      }
    }else {
      $this->addError('current_password', Hash::make($this->current_password));
    }
  }

  /**
   * Cancel function
   */
  public function Cancel()
  {
    
  }

  /**
   * Save profile image
   */
  public function saveProfileImage()
  {
    $image = $this->profile_image;
    $imageName = $image->getClientOriginalName();
    $imageNewName = $imageName.time().'.'.$image->extension();
    $photo = Image::make($image)->fit(512);
    Storage::disk('google')->put('1myDlAY82eriNIvEV11SaiknvWWq6LfEA/'.$imageNewName, (string) $photo->encode());
    $url = Storage::disk('google')->url('1myDlAY82eriNIvEV11SaiknvWWq6LfEA/'.$imageNewName);
    
    #user
    User::where('username', Auth::user()->username)->update([
      'profile_image' => $url
    ]);
    $this->reset('profile_image');
  }

  /**
   * Cancel profile Image
   */
  public function cancelProfileImage()
  {
    $this->reset('profile_image');
  }

  /**
   * Send email verification mail
   */
  public function SendVerifyMail()
  {
    $details = [
      'title' => 'Verify Your Email Address',
      'body' => 'Please click the following link and follow the next instructions. Thank you.'
    ];
    Mail::mailer('smtp')->to(Auth::user()->email)->send(new EmailVerifyMail($details));
  }

  /**
   * Verify Email address
   */
  #public variable for timer function
  public $minutes, $second, $endTimer;

  #public variables
  public $codeSent;

  #verify email function
  public function verifyEmail()
  {
    $this->SendVerifyMail();
    $this->codeSent = true;
    $this->minutes = 2;
    $this->second  = 60;
    $this->endTimer = true;
  }

  /**
   * Timer function
   */

  #timer function
  public function timer()
  {
    $this->second--;
    if ($this->second<10) {
      $this->second = "0$this->second";
    }
    if ($this->second == 0) {
      if ($this->minutes>0) {
        $this->minutes--;
        $this->second = 59;
      }else{
        $this->minutes = false;
        $this->second = false;
        $this->codeSent = true;
        $this->endTimer = false;
      }
    }
  }

  /**
   * Render function
   */
  public function render()
  {
      return view('livewire.backend.teacher.settings');
  }
}
