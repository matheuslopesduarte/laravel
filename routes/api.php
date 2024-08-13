<?php

namespace App\Http\Middleware;

use App\Http\Controllers\ExampleApiController;
use Illuminate\Support\Facades\Route;

Route::apiResource('api', ExampleApiController::class);


