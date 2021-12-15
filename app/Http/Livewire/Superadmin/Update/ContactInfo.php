<?php

namespace App\Http\Livewire\Superadmin\Update;

use App\Models\frontend\Contact;
use Livewire\Component;

class ContactInfo extends Component
{
  /**
   * Public variables
   */
  public $email, $phone, $address, $facebook, $twitter, $instagram, $linkedin, $pinterest, $skype, $whatsapp, $yt_mpc, $yt_mh;

  /**
   * Mount function
   */
  public function mount()
  {
    $contact_info = Contact::first();
    $this->email = $contact_info->email;
    $this->phone = $contact_info->phone;
    $this->address = $contact_info->address;
    $this->facebook = $contact_info->facebook;
    $this->twitter = $contact_info->twitter;
    $this->instagram = $contact_info->instagram;
    $this->linkedin = $contact_info->linkedin;
    $this->pinterest = $contact_info->pinterest;
    $this->skype = $contact_info->skype;
    $this->whatsapp = $contact_info->whatsapp;
    $this->yt_mpc = $contact_info->youtube_1;
    $this->yt_mh = $contact_info->youtube_2;
  }

  /**
   * Update function
   */
  public function update()
  {
    $contact_info = Contact::first();
    $contact_info->email = $this->email;
    $contact_info->phone = $this->phone;
    $contact_info->address = $this->address;
    $contact_info->facebook = $this->facebook;
    $contact_info->twitter = $this->twitter;
    $contact_info->instagram = $this->instagram;
    $contact_info->linkedin = $this->linkedin;
    $contact_info->pinterest = $this->pinterest;
    $contact_info->skype = $this->skype;
    $contact_info->whatsapp = $this->whatsapp;
    $contact_info->youtube_1 = $this->yt_mpc;
    $contact_info->youtube_2 = $this->yt_mh;
    $contact_info->save();
    session()->flash('success', 'Contact information is updated');
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.superadmin.update.contact-info');
  }
}
