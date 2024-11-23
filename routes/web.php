<?php

use App\Livewire\Dashboard\DashboardIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', DashboardIndex::class)->name('DashboardIndex');
Route::get('/home', DashboardIndex::class)->name('DashboardHome');
