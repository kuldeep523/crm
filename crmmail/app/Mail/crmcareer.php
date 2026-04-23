<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class crmcareer extends Mailable
{
    use Queueable, SerializesModels;

    public $contentcareer;
    public $viewcareer;
    /**
     * Create a new message instance.
     */
    public function __construct($contentcareer,$viewcareer)
    {
        $this->contentcareer = $contentcareer;
        $this->view = $viewcareer;
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Crmcareer',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $viewcareer = 'mailTemplate.'.$this->viewcareer;
        return new Content(
            view: $viewcareer,
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
