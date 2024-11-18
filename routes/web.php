<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;
use function App\Helpers\getSiteSetting;

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
        Route::get('site-settings', [SiteSettingController::class, 'index'])->name('site-settings.index');
        Route::post('site-settings', [SiteSettingController::class, 'store'])->name('site-settings.create');
        Route::resource('tables', TableController::class);
        Route::post('/tables/search', [SearchController::class, 'searchTables'])->name('tables.search');
        Route::resource('categories', CategoryController::class);
        Route::post('/categories/search', [CategoryController::class, 'search'])->name('categories.search');



    });


