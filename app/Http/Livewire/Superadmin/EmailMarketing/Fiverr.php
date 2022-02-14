<?php

namespace App\Http\Livewire\Superadmin\EmailMarketing;

use App\Mail\EmailMarketing\Fiverr as MailEmailMarketingFiverr;
use App\Models\Superadmin\EmailMarketing\Fiverr as EmailMarketingFiverr;
use Illuminate\Support\Facades\Mail;
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
   * Add input field for share gig information
   */
  public $inputs = [], $i = 0;
  public $imageLink, $gigLink, $gigTitle, $gigPrice;

  public function addGigInputField($i)
  {
    $i = $i+1;
    $this->i = $i;
    array_push($this->inputs ,$i);
  }

  # remove input field
  public function removeInputField($i)
  {
    unset($this->inputs[$i]);
  }

  /**
   * Send Fiverr email
   */
  # variable
  public $subject, $message;

  #function
  public function sendFiverrMail()
  {
    $fiverrReceiver = EmailMarketingFiverr::all();
    foreach ($fiverrReceiver as $receiver ) {
      $subject = $this->subject;
      $imageLink = $this->imageLink;
      $gigLink = $this->gigLink;
      $gigTitle = $this->gigTitle;
      $gigPrice = $this->gigPrice;
      $details = [
        'message' => $this->message,
        'name' => $receiver->name,
      ];
      Mail::mailer('fiverr')->to($receiver->email)->send(new MailEmailMarketingFiverr($details, $subject, $imageLink, $gigLink, $gigTitle, $gigPrice));
      session()->flash($receiver->name, 'Mail has been sent');
    }
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.superadmin.email-marketing.fiverr');
  }
}
