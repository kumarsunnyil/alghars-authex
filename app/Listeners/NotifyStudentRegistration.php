<?php

namespace App\Listeners;

use App\Events\StudentRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Mail;
use App\Mail\AlgharsEmail;

class NotifyStudentRegistration
{
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
     * @param  \App\Events\StudentRegistered  $event
     * @return void
     */
    public function handle(StudentRegistered $event)
    {
        Mail::to($event->mailData['to'])->send(new AlgharsEmail($event->mailData));
    }
}
