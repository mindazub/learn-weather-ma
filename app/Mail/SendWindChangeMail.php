<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendWindChangeMail extends Mailable
{
    use Queueable, SerializesModels;


    protected $type;
    /**
     * Create a new message instance.
     *
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.wind_change')
            ->with([
                'type' => $this->type,
            ]);
    }
}
