<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyRequest extends Mailable
{
    use Queueable, SerializesModels;
    public $custom_request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($custom_request)
    {
        $this->custom_request = $custom_request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Täze ýüzlenme!")
                    ->view('mail.main');
    }
}
