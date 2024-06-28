<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\globalmiddleware;
use App\Http\Middleware\groupedmiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Global Middlware
        $middleware->append(globalmiddleware::class);

        $middleware->appendToGroup('checkAge', [
            groupedmiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
