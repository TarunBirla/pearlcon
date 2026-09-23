<?php

namespace App\Mail;

use App\Models\ChatbotRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserChatbotNotification extends Mailable
{
    use Queueable, SerializesModels;

    public ChatbotRequest $chatbotRequest;

    /**
     * Create a new message instance.
     */
    public function __construct(ChatbotRequest $chatbotRequest)
    {
        $this->chatbotRequest = $chatbotRequest;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'We received your inquiry - Pearlcon Virtual Assistant',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.user_chatbot_notification',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $pdfPath = public_path('assets/Pearlcon-Profile-2013-pdf.pdf');
        if (file_exists($pdfPath)) {
            return [
                Attachment::fromPath($pdfPath)
                    ->as('Pearlcon-Company-Profile.pdf')
                    ->withMime('application/pdf'),
            ];
        }

        return [];
    }
}
