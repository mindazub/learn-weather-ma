<?php

namespace App\Listeners;

use App\Events\WindChanged;
use App\Mail\SendWindChangeMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendWindChangedListener
{
    private $emailAddress;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->emailAddress = env('W_EMAIL_ADDRESS');
    }

    /**
     * Handle the event.
     *
     * @param WindChanged $event
     * @return void
     */
    public function handle(WindChanged $event)
    {
        $event->type;

        Mail::to($this->emailAddress)->send(new SendWindChangeMail($type));

    }
}
