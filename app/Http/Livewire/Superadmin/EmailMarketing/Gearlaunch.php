<?php

namespace App\Http\Livewire\Superadmin\EmailMarketing;

use App\Mail\EmailMarketing\Gearlaunch as MailEmailMarketingGearlaunch;
use App\Models\Superadmin\EmailMarketing\Gearlaunch as EmailMarketingGearlaunch;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Gearlaunch extends Component
{
  # query string variable
  protected $queryString = ['topic'];
  public $topic = 'gearlaunch';

  public function mount()
  {
    $this->gearlaunchEmailReceiver = EmailMarketingGearlaunch::all();
  }

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
   * Add input field for share gig information
   */
  public $inputs = [], $i = 0;
  public $imageLink, $productLink, $productTitle, $productPrice;

  public function addProductInputField($i)
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
   * Send gearlaunch email
   */
  # variable
  public $subject, $message;

  #function
  public function sendGearlaunchMail()
  {
    $gearlaunchReceiver = EmailMarketingGearlaunch::all();
    foreach ($gearlaunchReceiver as $receiver ) {
      $subject = $this->subject;
      $imageLink = $this->imageLink;
      $productLink = $this->productLink;
      $productTitle = $this->productTitle;
      $productPrice = $this->productPrice;
      $details = [
        'message' => $this->message,
        'name' => $receiver->name,
      ];
      Mail::mailer('gearlaunch')->to($receiver->email)->send(new MailEmailMarketingGearlaunch($details, $subject, $imageLink, $productLink, $productTitle, $productPrice));
      // Mail::mailer('gearlaunch')->send('superadmin.emails.email-marketing.gearlaunch', $details, function($message){
      //   $message->to($receiverMail)->subject($this->subject);
      // });
      session()->flash($receiver->name, 'Mail has been sent');
    }
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.superadmin.email-marketing.gearlaunch');
  }
}
