<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\AdminPanel\AdminPanelController::class, 'redirect'])->name('home');
Route::get('admin', [\App\Http\Controllers\AdminPanel\AdminPanelController::class, 'index'])->name('admin.index');
Route::get('admin/login', [\App\Http\Controllers\AdminPanel\AdminPanelController::class, 'login'])->name('admin.login');
Route::post('admin/login', [\App\Http\Controllers\AdminPanel\AdminPanelController::class, 'loginProcess'])->name('admin.login_process');
