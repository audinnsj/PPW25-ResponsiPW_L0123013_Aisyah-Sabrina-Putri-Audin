<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Auth;

// Redirect root URL ke daftar menu
Route::get('/', function () {
    return redirect()->route('menus.index');
});

// Auth Laravel
Auth::routes();

// Semua pengguna (guest & login) bisa lihat daftar menu
Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');

// Fitur CRUD hanya untuk yang login
Route::middleware(['auth'])->group(function () {
    Route::get('/menus/create', [MenuController::class, 'create'])->name('menus.create');
    Route::post('/menus', [MenuController::class, 'store'])->name('menus.store');
    Route::get('/menus/{menu}/edit', [MenuController::class, 'edit'])->name('menus.edit');
    Route::put('/menus/{menu}', [MenuController::class, 'update'])->name('menus.update');
    Route::delete('/menus/{menu}', [MenuController::class, 'destroy'])->name('menus.destroy');
});