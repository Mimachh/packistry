<?php

namespace App\Bootstrappers;

use Illuminate\Console\Scheduling\Schedule;

class ScheduleBootstrapper
{
    // php artisan schedule:list
    public function __invoke(Schedule $schedule): void {}
}
