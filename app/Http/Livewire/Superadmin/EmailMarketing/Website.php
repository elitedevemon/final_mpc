<?php

namespace App\Http\Livewire\Superadmin\EmailMarketing;

use App\Mail\EmailMarketing\Website as MailEmailMarketingWebsite;
use App\Models\Superadmin\EmailMarketing\EmailForReuse;
use App\Models\Superadmin\EmailMarketing\Website as EmailMarketingWebsite;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Website extends Component
{
  # query string variable
  protected $queryString = ['topic'];
  public $topic = 'website';

  /**
   * Add website email receiver info
   */
  # variable
  public $name, $email;
  public function addReceiver()
  {
    $this->validate([
      'name' => 'required',
      'email' => 'required|email'
    ]);
    $websiteReceiver = new EmailMarketingWebsite();
    $websiteReceiver->name = $this->name;
    $websiteReceiver->email = $this->email;
    $websiteReceiver->save();
    $this->reset('name', 'email');
    session()->flash('success', 'Receiver has been added');
  }

  /**
   * Send website email
   */
  # variable
  public $subject, $message;

  #function
  public function sendWebsiteMail()
  {
    $websiteReceiver = EmailMarketingWebsite::all();
    foreach ($websiteReceiver as $receiver ) {
      $subject = $this->subject;
      $details = [
        'message' => $this->message,
        'name' => $receiver->name,
      ];
      Mail::to($receiver->email)->send(new MailEmailMarketingWebsite($details, $subject));
      session()->flash($receiver->name, 'Mail has been sent');
    }
  }

  /**
   * Save website mail to reuse
   */
  public function saveWebsiteMail($topic)
  {
    $email = new EmailForReuse();
    $email->subject = $this->subject;
    $email->message = $this->message;
    $email->category = $topic;
    $email->save();
  }

  /**
   * Set quick response
   */
  public function setQuickResponse($id)
  {
    $email = EmailForReuse::find($id);
    $this->subject = $email->subject;
    $this->message = $email->message;
  }

  /**
   * Delete quick response
   */
  public function deleteQuickResponse($id)
  {
    EmailForReuse::where('id', $id)->delete();
  }

  /**
   * Render function
   */
  public function render()
  {
      return view('livewire.superadmin.email-marketing.website', [
        'reuseEmail' => EmailForReuse::all(),
      ]);
  }
}
