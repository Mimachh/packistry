<?php

namespace App\Bootstrappers;

use Illuminate\Foundation\Configuration\Middleware;

class MiddlewareBootstrapper
{

    public function __invoke(Middleware $middleware): void
    {

        $middleware->web(append: []);
    }
}
