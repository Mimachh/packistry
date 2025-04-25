<?php

namespace App\Bootstrappers;

use Illuminate\Foundation\Events\DiagnosingHealth;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\View;

class RoutingBootstrapper
{
    public function __invoke(Router $router): void
    {

        $router->middleware('web')
            ->group(base_path('routes/web.php'));
        $router->middleware('api')
            ->group(base_path('routes/api.php'));

        $router->middleware('web')
            ->get('/up', function () {
                Event::dispatch(new DiagnosingHealth);
                return View::file(base_path('/vendor/laravel/framework/src/Illuminate/Foundation/resources/health-up.blade.php'));
            });


        // Route fallback SPA
        $router->middleware('web')
            ->get('{any}', fn() => response()->file(public_path('index.html')))
            ->where('any', '.*');
    }
}
