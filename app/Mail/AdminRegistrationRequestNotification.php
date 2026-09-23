<?php

namespace App\Mail;

use App\Models\RegistrationRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminRegistrationRequestNotification extends Mailable
{
    use Queueable, SerializesModels;

    public RegistrationRequest $registrationRequest;

    /**
     * Create a new message instance.
     */
    public function __construct(RegistrationRequest $registrationRequest)
    {
        $this->registrationRequest = $registrationRequest;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Quote / Registration Request from ' . $this->registrationRequest->full_name,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.admin_registration_request_notification',
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
