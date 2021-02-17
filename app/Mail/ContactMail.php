<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $recipient;
    protected $sender;
    protected $data;

    public function __construct($from,  array $data)
    {

        $this->sender = $from;
        $this->recipient = env('HR_EMAIL',"sales@sec.am");
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return  $this
            ->to($this->recipient)
            ->from($this->sender)
            ->subject('Contact us')
            ->view('contact-mail')
            ->with('data',$this->data);
    }
}
