<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class StudentEvaluationStatusAdminNotifier extends Mailable
{
    use Queueable, SerializesModels;

    public $evaluationEmailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($evaluationEmailData)
    {
        $this->evaluationEmailData = $evaluationEmailData;
        //
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Student Evaluation Has been successfully completed Admin Notifier Message',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'layouts.mail.evaluationnotifier',
        );

    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
