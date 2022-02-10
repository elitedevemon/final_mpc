<?php

namespace App\Http\Livewire\Superadmin\EmailMarketing;

use App\Models\Superadmin\EmailMarketing\Youtube as EmailMarketingYoutube;
use Livewire\Component;

class Youtube extends Component
{
  # query string variable
  protected $queryString = ['topic'];
  public $topic = 'fiverr';

  /**
   * Add gearlaunch email receiver info
   */
  # variable
  public $name, $email;
  public function addReceiver()
  {
    $this->validate([
      'name' => 'required',
      'email' => 'required|email'
    ]);
    $youtubeReceiver = new EmailMarketingYoutube();
    $youtubeReceiver->name = $this->name;
    $youtubeReceiver->email = $this->email;
    $youtubeReceiver->save();
    $this->reset('name', 'email');
    session()->flash('success', 'Receiver has been added');
  }

  /**
   * Send YouTube email
   */
  # variable
  public $title, $subject, $message;

  #function
  public function sendYoutbeMail()
  {
    
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.superadmin.email-marketing.youtube');
  }
}
