<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Livewire\Dashboard\DashboardIndex;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('auth.login');
// });

// Route::middleware(['auth'])
//     ->group(function () {
//         Route::controller(DashboardController::class)->group(function () {
//             Route::get('/', 'index')
//                 ->name('dashboard.index');
//         });

<<<<<<< HEAD
        // PRODUK
        Route::controller(ProdukController::class)->group(function () {
            Route::get('/produk', 'index')->name('produklist.index');
            Route::get('/produk-tambah', 'create')->name('produklist.create');
            Route::post('/produk-store', 'store')->name('produklist.store');
            Route::get('/produk-destroy/{id}', 'destroy')->name('produklist.destroy');
        });
    });
=======
//         // PRODUK
//         Route::controller(ProdukController::class)->group(function () {
//             Route::get('/produk', 'index')->name('produklist.index');
//             Route::get('/produk-tambah', 'create')->name('produklist.create');
//             // Route::post('/produk-store', 'index')->name('produk.index');
//         });
//     });
>>>>>>> d16ec63 (.)

// Route::middleware(['guest'])->group(function () {
//     Route::controller(AuthController::class)->group(function () {
//         Route::get('/login', 'login')
//             ->name('login');

<<<<<<< HEAD
        Route::post('/login-auth', 'authenticate')
            ->name('login.auth');
    });
});
=======
//         Route::post('/login-auth', 'authenticate')
//             ->name('login.auth');
//     });
// });

Route::get('/',DashboardIndex::class)->name('dashboard.index');
>>>>>>> d16ec63 (.)
