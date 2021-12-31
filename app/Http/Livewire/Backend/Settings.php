<?php

namespace App\Http\Livewire\Backend;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class Settings extends Component
{
  use WithFileUploads;
  #public variables for changing password
  public $current_password, $new_password, $confirm_password, $showPass, $profile_image;

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
    $image_resize = Image::make($image->getRealPath());
    $image_resize->resize(512, 512);
    $image_resize->save(public_path('images/profile_images/'. $imageNewName));
    #user
    User::where('username', Auth::user()->username)->update([
      'profile_image' => $imageNewName
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
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.settings');
  }
}
