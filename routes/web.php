<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', [MenuController::class, 'index'])->name('home');

// Hanya admin yang bisa akses CRUD
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('menus', MenuController::class)->except(['index']);
});

// Auth bawaan Laravel
Auth::routes();
