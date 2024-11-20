<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::middleware(['auth'])
    ->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/', 'index')
                ->name('dashboard.index');
        });

        // produk
        Route::controller(ProdukController::class)->group(function () {
            Route::get('/produk', 'index')->name('produk.index');
        });
    });

Route::middleware(['guest'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')
            ->name('login');

        Route::post('/login-auth', 'authenticate')
            ->name('login.auth');
    });
});
