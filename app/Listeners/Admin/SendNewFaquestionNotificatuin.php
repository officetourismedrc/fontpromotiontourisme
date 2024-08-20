<?php

namespace App\Listeners\Admin;

use App\Events\Admin\FaquestionEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\FaquestionMail;
use Illuminate\Support\Facades\Mail;

class SendNewFaquestionNotificatuin implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(FaquestionEvent $event): void
    {
        //
        // Mail::mailer('mailgun')
        //      ->to('jkkjkkas@gmail.com')
        //      ->send(new FaquestionMail);
        Mail::to('jkkjkkas@gmail.com')
             ->send(new FaquestionMail($event->question));
    }
}
