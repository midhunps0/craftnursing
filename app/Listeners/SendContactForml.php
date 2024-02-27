<?php

namespace App\Listeners;

use App\Events\ContactFormSubmission;
use App\Mail\ContactMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendContactForm implements ShouldQueue
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
    public function handle(ContactFormSubmission $event)
    {
       $formData = $event->formData;
       
    
       Mail::to('reshmakanjoorparambil@gmail.com')->send(new ContactMail($formData));
    }
       
}
