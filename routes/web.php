<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

});

Route::prefix('admin')
    ->middleware('admin_or_kitchen')
    ->group(function () {
        Route::get('/dashboard', function () {return view('backend.dashboard');})->name('dashboard');

    });

