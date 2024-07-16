<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        // List of custom commands
        // \App\Console\Commands\YourCustomCommand::class,
        \App\Console\Commands\PublishPost::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        // Example scheduled task
        // $schedule->command('your:command')->daily();
        $schedule->command('posts:publish')->everyMinute();
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
