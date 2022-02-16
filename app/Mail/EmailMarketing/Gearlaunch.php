<?php

namespace App\Mail\EmailMarketing;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Gearlaunch extends Mailable
{
    use Queueable, SerializesModels;

    public $details, $gearlaunchSubject, $imageLink, $productLink, $productTitle, $productPrice;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $gearlaunchSubject, $imageLink, $productLink, $productTitle, $productPrice)
    {
      $this->details = $details;
      $this->gearlaunchSubject = $gearlaunchSubject;
      $this->imageLink = $imageLink;
      $this->productLink = $productLink;
      $this->productTitle = $productTitle;
      $this->productPrice = $productPrice;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->gearlaunchSubject)->view('superadmin.emails.email-marketing.gearlaunch');
    }
}
