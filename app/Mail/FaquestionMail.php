<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\faquestion;

use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;

class FaquestionMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        protected faquestion $faquestion,
    )
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('jkkjkkas@gmail.com', 'jkkas'),
            subject: 'New question on the FPT patform',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mailView.FaqMail.faquestionMail',
            text: 'mailView.FaqMail.faquestionMail_text',
            with: [
                     'question' => $this->faquestion->question,
                     'sender_email' => $this->faquestion->email,
                     'sender_name' => $this->faquestion->user_name,
            ],
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
