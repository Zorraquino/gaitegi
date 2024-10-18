<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class LeadGenerated extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $name;
    public $message;

    public function __construct($email, $name, $message)
    {
        $this->email = (string) $email;
        $this->name = (string) $name;
        $this->message = (string) $message;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('info@gaitegi.com', 'Gaitegi'),
            to: [new Address('gotzon12@gmail.com', 'Gaitegi')],
            subject: 'Nuevo lead generado',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.lead',
            with: ['messages' => $this->message, 'who' => $this->name],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
