<?php

use App\Http\Controllers\ListController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::get('/tasks', [ListController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
require __DIR__.'/auth.php';
