<?php

namespace App\Listeners;

use App\Events\SendNewsletterEvent;
use App\Mail\SendNewsletterEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNewsletterListener implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\BusinessAccountCreatedEvent  $event
     * @return void
     */
    public function handle(SendNewsletterEvent $event)
    {
         //Send Mail to Newsletter subscribers
         Mail::to($event->newsletter['email'])       
         ->send(new SendNewsletterEmail($event));
    }
}
