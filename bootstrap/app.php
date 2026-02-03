<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Sebuah gerbang untuk akses API admin, maka butuh password admin atau semacamnya
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Untuk pengecualian, jika ada error maka tampilkan error apa disini
    })->create();
