<?php

use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->group(function () {

    Route::get('departments', [\App\Http\Controllers\Api\V1\DepartmentController::class, 'index']);
    Route::get('workers', [\App\Http\Controllers\Api\V1\WorkerController::class, 'index']);
    Route::get('workers/{user}', [\App\Http\Controllers\Api\V1\WorkerController::class, 'show']);
    Route::get('user', [\App\Http\Controllers\Api\V1\UserController::class, 'show']);
    Route::patch('user', [\App\Http\Controllers\Api\V1\UserController::class, 'update']);
    Route::delete('logout', [\App\Http\Controllers\Api\V1\AuthController::class, 'logout']);

});

Route::middleware('guest')->group(function () {

    Route::post('auth/login', [\App\Http\Controllers\Api\V1\AuthController::class, 'login']);
    Route::post('auth/register', [\App\Http\Controllers\Api\V1\AuthController::class, 'register']);
    Route::post('auth/forgot-password', [\App\Http\Controllers\Api\V1\AuthController::class, 'forgotPassword']);
    Route::post('auth/password-reset', [\App\Http\Controllers\Api\V1\AuthController::class, 'passwordReset'])
        ->name('password.reset');;

});

