<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisteredMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $full_name)
    {
        $this->email = $email;
         $this->full_name = $full_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
            $name = $this->full_name;
            return $this
        ->from('no-reply@cryptokini.com')
        ->to($this->email)
        ->subject('Cryptokini: Successful registration')
        ->markdown('mail.registered')->with([
            'full_name'=>$name,
        ]);
    }
}
