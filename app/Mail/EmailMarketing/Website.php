<?php

namespace App\Mail\EmailMarketing;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Website extends Mailable
{
    use Queueable, SerializesModels;
    public $details, $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $subject)
    {
      $this->details = $details;
      $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)->view('superadmin.emails.email-marketing.website');
    }
}
