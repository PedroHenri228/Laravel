<?php

use App\Http\Controllers\ListController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::get('/tasks', [ListController::class, 'index'])->name('tasks.index');
Route::get('/tasks/{id}', [ListController::class, 'show'])->name('tasks.show');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'get_id'])->name('users.show');
require __DIR__.'/auth.php';
