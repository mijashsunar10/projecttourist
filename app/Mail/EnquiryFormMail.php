<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnquiryFormMail extends Mailable implements ShouldQueue
{
    
    use Queueable, SerializesModels;

    public $data;
    public $entity;
    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct(array $data,$entity)
    {
        $this->data = $data;
        $this->entity = $entity;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Enquiry Form Submission',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.enquiry_form',
            with: [
                'data' => $this->data,
                'entity' => $this->entity,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}