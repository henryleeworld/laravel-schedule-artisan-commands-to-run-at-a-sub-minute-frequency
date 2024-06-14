<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->withSchedule(function ($schedule) {
        $schedule->command('demo:cron')->everySecond()->withoutOverlapping(10);
        // $schedule->command('demo:cron')->everyTwoSeconds()->withoutOverlapping(10);
        // $schedule->command('demo:cron')->everyFiveSeconds()->withoutOverlapping(10);
        // $schedule->command('demo:cron')->everyTenSeconds()->withoutOverlapping(10);
        // $schedule->command('demo:cron')->everyFifteenSeconds()->withoutOverlapping(10);
        // $schedule->command('demo:cron')->everyTwentySeconds()->withoutOverlapping(10);
        // $schedule->command('demo:cron')->everyThirtySeconds()->withoutOverlapping(10);
    })->create();
