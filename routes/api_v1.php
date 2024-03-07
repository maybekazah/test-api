<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('auth/login', [\App\Http\Controllers\Api\V1\AuthController::class, 'login'])->name('auth.login');
Route::post('auth/register', [\App\Http\Controllers\Api\V1\AuthController::class, 'register'])->name('auth.register');
Route::post('auth/restore', [\App\Http\Controllers\Api\V1\AuthController::class, 'restore'])->name('auth.restore');
Route::post('auth/restore/confirm', [\App\Http\Controllers\Api\V1\AuthController::class, 'restoreConfirm'])->name('auth.restore.confirm');

Route::get('departments', [\App\Http\Controllers\Api\V1\DepartmentController::class, 'index'])->name('departments.index');

Route::get('workers', [\App\Http\Controllers\Api\V1\WorkerController::class, 'index'])->name('workers.index');
Route::get('workers/{user}', [\App\Http\Controllers\Api\V1\WorkerController::class, 'show'])->name('workers.show');

Route::get('user', [\App\Http\Controllers\Api\V1\UserController::class, 'show'])->name('user.show');
Route::patch('user', [\App\Http\Controllers\Api\V1\UserController::class, 'update'])->name('user.update');


