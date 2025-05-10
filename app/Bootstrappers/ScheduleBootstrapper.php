<?php

namespace App\Bootstrappers;

use Illuminate\Console\Scheduling\Schedule;

class ScheduleBootstrapper
{
    // php artisan schedule:list
    public function __invoke(Schedule $schedule): void
    {
        $schedule->command('backup:clean')->weekly()->sundays()->at('01:00');
        $schedule->command('backup:run')->weekly()->sundays()->at('01:30')->after(function () {
            \App\Models\User::first()->notify(new \App\Notifications\BackupCompleted());
        });;
    }
}
