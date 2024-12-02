<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PaymentApproved extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $requestMail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($requestMail)
    {
        $this->requestMail = $requestMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Payment Approved – Funds to Be Released')
        ->view('emails.PaymentApproved')
        ->with([
            'requestMail' => $this->requestMail,
        ]);

    }

}
