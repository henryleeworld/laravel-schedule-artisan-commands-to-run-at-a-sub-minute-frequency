<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Spatie\ShortSchedule\ShortSchedule;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\DemoCron::class,
    ];

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
    }

    protected function shortSchedule(ShortSchedule $shortSchedule)
    {
        // this command will run every second
        $shortSchedule->command('demo:cron')->everySecond()->withoutOverlapping();
        // $shortSchedule->command('demo:cron')->environment(['staging', 'production'])->everySecond();
        // $shortSchedule->command('demo:cron')->between('09:00', '17:00')->everySecond();
        // this command will run every 30 seconds
        // $shortSchedule->command('demo:cron')->everySeconds(30);
        // this command will run every half a second
        // $shortSchedule->command('demo:cron')->everySeconds(0.5);
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
