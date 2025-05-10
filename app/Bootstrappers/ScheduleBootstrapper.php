<?php

namespace App\Bootstrappers;

use Illuminate\Console\Scheduling\Schedule;

class ScheduleBootstrapper
{
    // php artisan schedule:list
    public function __invoke(Schedule $schedule): void
    {
        $schedule->command('backup:clean')->daily()->at('01:00');
        $schedule->command('backup:run')->daily()->at('01:30');
    }
}
