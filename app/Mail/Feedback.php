<?php

namespace App\Mail;

use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;

class Feedback extends Mailable
{
    public function __construct(
        public string $name,
        public string $email,
        public string $comment
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->email, $this->name),
            subject: 'Feedback from ' . $this->name,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.feedback',
        );
    }
}
