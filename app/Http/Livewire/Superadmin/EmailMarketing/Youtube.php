<?php

namespace App\Http\Livewire\Superadmin\EmailMarketing;

use App\Mail\EmailMarketing\YouTube as MailEmailMarketingYouTube;
use App\Models\Superadmin\EmailMarketing\Youtube as EmailMarketingYoutube;
use Illuminate\Support\Facades\Mail;
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
   * Add input field for share gig information
   */
  public $inputs = [], $i = 0;
  public $yotubeTitle, $youtubeEmbedCode, $yotubeLink;

  public function addYoutubeInputField($i)
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
   * Send YouTube email
   */
  # variable
  public $subject, $message;

  #function
  public function sendYoutubeMail()
  {
    $youtubeReceiver = EmailMarketingYoutube::all();
    foreach ($youtubeReceiver as $receiver ) {
      $subject = $this->subject;
      $yotubeTitle = $this->yotubeTitle;
      $youtubeEmbedCode = $this->youtubeEmbedCode;
      $yotubeLink = $this->yotubeLink;
      $details = [
        'message' => $this->message,
        'name' => $receiver->name,
      ];
      Mail::mailer('youtube')->to($receiver->email)->send(new MailEmailMarketingYouTube($details, $subject, $yotubeTitle, $youtubeEmbedCode, $yotubeLink));
    }
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.superadmin.email-marketing.youtube');
  }
}
