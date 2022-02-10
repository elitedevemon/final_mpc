<?php

namespace App\Http\Livewire\Superadmin\EmailMarketing;

use App\Models\Superadmin\EmailMarketing\Fiverr as EmailMarketingFiverr;
use Livewire\Component;

class Fiverr extends Component
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
    $fiverrReceiver = new EmailMarketingFiverr();
    $fiverrReceiver->name = $this->name;
    $fiverrReceiver->email = $this->email;
    $fiverrReceiver->save();
    $this->reset('name', 'email');
    session()->flash('success', 'Receiver has been added');
  }

  /**
   * Send Fiverr email
   */
  # variable
  public $title, $subject, $message;

  #function
  public function sendFiverrMail()
  {
    
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.superadmin.email-marketing.fiverr');
  }
}
