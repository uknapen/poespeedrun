<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

Route::get('/', [PageController::class, 'index']);

Route::get('/all', [PageController::class, 'all_runs']);

Route::get('/create', [PageController::class, 'create'])->middleware('auth');

Route::post('/runs', [PageController::class, 'store'])->middleware('auth');

Route::get('/register', [UserController::class, 'createUser'])->middleware('guest');

Route::post('/users', [UserController::class, 'store']);

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);


// test 2

Route::get('/{run}', [PageController::class, 'show']);
