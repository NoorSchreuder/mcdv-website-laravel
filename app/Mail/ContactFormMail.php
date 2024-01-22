<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    /**
     * Create a new message instance.
     *
     * @param array $formData
     */
    public function __construct(array $formData)
    {
        $this->formData = [
            'name' => $formData['name'],
            'email' => $formData['email'],
            'phone' => $formData['phone'],
            'message' => $formData['message'],
        ];
    }

    /**
     * Build the message.
     *
     * @return $this
     */// ContactFormMail.php
    public function build()
    {
        return $this
            ->subject('Bericht contactformulier')
            ->text('emails.contact_plain')
            ->with([
                'formData' => $this->formData,
                'timestamp' => now(), // Add the current timestamp
            ]);
    }
}