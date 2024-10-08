<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../app/Shared/Infrastructure/Routes/API.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withProviders([\App\Shared\Infrastructure\Providers\AppServiceProvider::class])
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withCommands([__DIR__ . '/../app/Shared/Application/Commands/CreateMappersCommand/'])
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
