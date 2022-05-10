<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'showLogin'])
    ->name('auth.show-login')->middleware(['guest']);
Route::post('login', [AuthController::class, 'login'])
    ->name('auth.login')->middleware(['guest']);
Route::get('logout', [AuthController::class, 'logout'])
    ->name('auth.logout')->middleware(['auth']);

Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard.index')->middleware(['auth']);
