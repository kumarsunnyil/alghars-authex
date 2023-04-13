<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class StudentEvaluationCompleteNotifier extends Mailable
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
            subject: 'Student Evaluation Completed Message',
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
            view: 'layouts.mail.evaluation',
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

    public function build()
    {
        //  dd('reached here');
        return $this->subject($this->evaluationEmailData['subject'])
        ->view('layouts.mail.evaluationnotifier');
            // ->view('emails.demoMail');
    }
}
