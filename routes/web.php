<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AyamController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PesananPenjualController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PenjualController;

// Landing Page – Bisa diakses publik
Route::get('/', function () {
    return view('welcome'); // pastikan ada resources/views/landing.blade.php
})->name('welcome');

// Dashboard setelah login
Route::get('/dashboard', function () {
    return view('layoutDashboard.master');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile (bisa untuk semua user)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Redirect ke halaman sesuai role
//Admin
Route::middleware(['auth', 'admin'])->group(function () {
    //Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('/users', UserController::class);
    Route::get('/admin/user-list', [AdminController::class, 'userList'])->name('admin.user-list');
Route::delete('/admin/user/{id}', [AdminController::class, 'destroy'])->name('admin.user.destroy');


});

// Penjual
Route::middleware(['auth', 'penjual'])->group(function () {
    // Route::resource('/penjual', PenjualController::class);
    Route::resource('/pesanan-penjual', PesananPenjualController::class);

    Route::get( '/penjual', [PenjualController::class, 'dashboard'])-> name ( 'penjual.dashboard'); 
    Route::get( '/penjual/daftar-ayam', [PenjualController::class, 'index'])-> name ( 'penjual.index'); 
    Route::get( '/penjual/tambah-ayam', [PenjualController::class, 'create'])-> name ( 'penjual.create'); 
    Route::post( '/penjual/tambah-ayam', [PenjualController::class, 'store'])-> name ( 'penjual.store'); 
    Route::get( '/penjual/edit-ayam/{ayam}', [PenjualController::class, 'edit'])-> name ( 'penjual.edit');
    Route::delete( '/penjual/hapus-ayam/{ayam}', [PenjualController::class, 'destroy'])-> name ( 'penjual.destroy');
    Route::put( '/penjual/edit-ayam/{ayam}', [PenjualController::class, 'update'])-> name ( 'penjual.update');
});

// Pembeli
Route::middleware(['auth', 'pembeli'])->group(function () {
    Route::get('/pembeli', [PembeliController::class, 'index'])->name('pembeli.index');
    Route::resource('/pesanan', PesananController::class);
});



require __DIR__.'/auth.php';
