<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class testMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mail;
    public function __construct($details)
    {
        $this->mail=$details;

    }

    public function build()
    {

        return $this->subject('Mail from spaGreen.com')->view('gmail.send',$this->mail);
    }
}
