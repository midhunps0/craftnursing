<?php

namespace App\Listeners;

use App\Events\ApplicationFormSubmission;
use App\Mail\ApplicationMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendApplicationForm
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
    public function handle(ApplicationFormSubmission $event)
    {
        $formData = $event->formData;
        Mail::to('reshmakanjoorparambil@gmail.com')->send(new ApplicationMail($formData));
    }
}
