<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class WeeklyPicksReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'picks-reminder:weekly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send weekly reminder to make TSBP picks';

    /**
     * Execute the console command.
     *
     * @return void
     */
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
