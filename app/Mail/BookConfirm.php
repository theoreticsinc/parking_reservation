<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookConfirm extends Mailable
{
    use Queueable, SerializesModels;

    /** 
     * Create a new message instance.
     */
    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Booking Is Confirm',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        //$formData = $this->data;
        return new Content(
            view: 'mail.confirmation_mail',
            with: ['formData' => $this->formData],
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