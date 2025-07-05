<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Auth;

// Tampilan utama (bisa diakses guest dan login)
Route::get('/', [MenuController::class, 'index'])->name('menu.index');

// Auth bawaan Laravel
Auth::routes();

// Semua fitur CRUD hanya untuk yang sudah login
Route::middleware(['auth'])->group(function () {
    Route::get('/menus/create', [MenuController::class, 'create'])->name('menus.create');
    Route::post('/menus', [MenuController::class, 'store'])->name('menus.store');
    Route::get('/menus/{menu}/edit', [MenuController::class, 'edit'])->name('menus.edit');
    Route::put('/menus/{menu}', [MenuController::class, 'update'])->name('menus.update');
    Route::delete('/menus/{menu}', [MenuController::class, 'destroy'])->name('menus.destroy');
});
