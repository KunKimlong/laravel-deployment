<?php

define('LARAVEL_START', microtime(true));

/*
 * Composer's autoloader.
 */
require __DIR__.'/../vendor/autoload.php';

/*
 * Boot up the application.
 */
$app = require_once __DIR__.'/../bootstrap/app.php';

/*
 * Handle the request and send the response.
 */
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);
