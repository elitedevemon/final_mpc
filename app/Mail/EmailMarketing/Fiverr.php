<?php

namespace App\Mail\EmailMarketing;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Fiverr extends Mailable
{
    use Queueable, SerializesModels;
    public $details, $fiverrSubject, $imageLink, $gigLink, $gigTitle, $gigPrice;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $fiverrSubject, $imageLink, $gigLink, $gigTitle, $gigPrice)
    {
      $this->details = $details;
      $this->fiverrSubject = $fiverrSubject;
      $this->imageLink = $imageLink;
      $this->gigLink = $gigLink;
      $this->gigTitle = $gigTitle;
      $this->gigPrice = $gigPrice;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->fiverrSubject)->view('superadmin.emails.email-marketing.fiverr');
    }
}
