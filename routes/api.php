<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/tasks', \App\Http\Controllers\Api\TaskController::class);
