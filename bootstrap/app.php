<?php

use App\Bootstrappers\ExceptionsBootstrapper;
use App\Bootstrappers\MiddlewareBootstrapper;
use App\Bootstrappers\RoutingBootstrapper;
use App\Bootstrappers\ScheduleBootstrapper;
use Illuminate\Foundation\Application;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting((new RoutingBootstrapper)(...))
    ->withMiddleware(new MiddlewareBootstrapper)
    ->withExceptions(new ExceptionsBootstrapper)
    ->withSchedule(new ScheduleBootstrapper)
    ->create();
