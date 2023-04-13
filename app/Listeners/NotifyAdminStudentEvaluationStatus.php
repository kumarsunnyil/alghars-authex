<?php

namespace App\Listeners;

use Mail;
use App\Events\StudentEvaluated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use \App\Mail\StudentEvaluationStatusAdminNotifier;

class NotifyAdminStudentEvaluationStatus
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
     * @param  \App\Events\StudentEvaluated  $event
     * @return void
     */
    public function handle(StudentEvaluated $event)
    {
        Mail::to($event->evaluationEmailData['to'])->send(new StudentEvaluationStatusAdminNotifier($event->evaluationEmailData));
    }
}
