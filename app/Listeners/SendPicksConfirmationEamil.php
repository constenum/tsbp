<?php

namespace App\Listeners;

use App\Mail\PicksConfirmation;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class SendPicksConfirmationEamil
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $submitted_picks = $event->submitted_picks;
        $user = $event->user;

        Mail::to($user->email)->send(new PicksConfirmation($submitted_picks));
    }
}
