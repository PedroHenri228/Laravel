<?php

use App\Http\Controllers\ListController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'login']);
Route::get('/tasks', [ListController::class, 'index'])->name('tasks.index');
Route::get('/tasks/{id}', [ListController::class, 'show'])->name('tasks.show');
Route::delete('tasks/{id}', [ListController::class, 'deleted'])->name('tasks.delete');
Route::post('tasks/{id}/update', [ListController::class, 'update'])->name('tasks.updated');
Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/users/{id}', [UserController::class, 'get_id'])->name('users.show');
require __DIR__.'/auth.php';
