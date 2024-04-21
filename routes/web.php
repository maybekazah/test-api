<?php

use App\Http\Controllers\AdminPanel\AdminPanelController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('admin/login', [AdminPanelController::class, 'login'])->name('admin.login');
    Route::post('admin/login', [AdminPanelController::class, 'loginProcess'])->name('admin.login_process');
});

Route::middleware('auth')->group(function () {

    Route::get('admin/logout', [AdminPanelController::class, 'logout'])->name('admin.logout');
    Route::get('/', [AdminPanelController::class, 'redirect'])->name('home');
    Route::get('admin', [AdminPanelController::class, 'index'])->name('admin.index');

    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users', [UserController::class, 'store'])->name('users.store');
    Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::patch('users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');


});


Route::middleware('auth')->group(function () {

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::patch('posts/{post}', [PostController::class, 'update'])->name('posts.update');

Route::post('posts/create', [PostController::class, 'store'])->name('posts.store');

});
