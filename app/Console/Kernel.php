<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\App;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule) : Void
    {
        if(App::environment('production')) {
            $schedule->command('spreads:weekly')
                ->timezone('America/New_York')
                ->weeklyOn(3, '11:00')
                ->withoutOverlapping();
        } else {
//            $schedule->command('spreads:weekly')
//                ->everyMinute()
//                ->withoutOverlapping();
        }

        $schedule->command('scores:daily')
            ->everyMinute()
            ->unlessBetween('10:55', '11:22')
            ->withoutOverlapping();

        $schedule->command('picks-reminder:weekly')
            ->weeklyOn(6, '11:20')
            ->withoutOverlapping();
    }

    protected function commands() : Void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
