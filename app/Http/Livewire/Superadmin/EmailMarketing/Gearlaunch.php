<?php

namespace App\Http\Livewire\Superadmin\EmailMarketing;

use App\Models\Superadmin\EmailMarketing\Gearlaunch as EmailMarketingGearlaunch;
use Livewire\Component;

class Gearlaunch extends Component
{
  # query string variable
  protected $queryString = ['topic'];
  public $topic = 'gearlaunch';

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
    $gearlaunchReceiver = new EmailMarketingGearlaunch();
    $gearlaunchReceiver->name = $this->name;
    $gearlaunchReceiver->email = $this->email;
    $gearlaunchReceiver->save();
    $this->reset('name', 'email');
    session()->flash('success', 'Receiver has been added');
  }

  /**
   * Send gearlaunch email
   */
  # variable
  public $title, $subject, $message;

  #function
  public function sendGearlaunchMail()
  {
    
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.superadmin.email-marketing.gearlaunch');
  }
}
