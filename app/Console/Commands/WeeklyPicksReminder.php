<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;


class WeeklyPicksReminder extends Command
{
    protected $signature = 'picks-reminder:weekly';

    protected $description = 'Send weekly reminder to make TSBP picks';

    public function handle() : void
    {
        $users = User::all();

        if ($users->count() > 0) {
            foreach ($users as $user) {
                Mail::to($user)->send(new \App\Mail\WeeklyPicksReminder);
                sleep(2);
            }
        }
    }
}
