<?php

namespace App\Bootstrappers;

use Illuminate\Foundation\Configuration\Exceptions;

class ExceptionsBootstrapper
{
    public function __invoke(Exceptions $exceptions): void {}
}
