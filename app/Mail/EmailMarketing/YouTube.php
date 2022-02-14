<?php

namespace App\Mail\EmailMarketing;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class YouTube extends Mailable
{
    use Queueable, SerializesModels;

    public $details, $youtubeSubject, $yotubeTitle, $youtubeEmbedCode, $yotubeLink;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $youtubeSubject, $yotubeTitle, $youtubeEmbedCode, $yotubeLink)
    {
      $this->details = $details;
      $this->youtubeSubject = $youtubeSubject;
      $this->yotubeTitle = $yotubeTitle;
      $this->youtubeEmbedCode = $youtubeEmbedCode;
      $this->yotubeLink = $yotubeLink;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->youtubeSubject)->view('superadmin.emails.email-marketing.youtube');
    }
}
