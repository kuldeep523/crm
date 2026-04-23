<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class crmlandingmail extends Mailable
{
    use Queueable, SerializesModels;

    public $content;
    public $view;
    /**
     * Create a new message instance.
     */
    public function __construct($content,$view)
    {
        $this->content = $content;
        $this->view = $view;
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Crmlandingmail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $view = 'mailTemplate.'.$this->view;
        return new Content(
            view: $view,
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
