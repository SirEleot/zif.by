<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Ticket extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    private $inputs;
    private $mail;
    public function __construct($inputs, $mail)
    {
        $this->inputs = $inputs;
        $this->mail = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() 
    {
        //dd($this->mail);
        return $this->from($this->mail['from'],$this->mail['name'])
            ->view('mail.ticket',$this->inputs);
    }
}
