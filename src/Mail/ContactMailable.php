<?php

namespace JamesSingizi\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    public string $message;
    public string $email;
    public string $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $message, string $name, string $email)
    {
        $this->message = $message;
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.email')->with([
            'message'=>$this->message,
            'name'=>$this->name,
            'email'=>$this->email
        ]);
    }
}
