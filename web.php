<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\AdminController;

// Route untuk halaman login
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Middleware untuk membatasi akses hanya untuk admin
Route::middleware(['auth', 'admin'])->group(function () {
    
    // Dashboard Admin
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Manajemen Karyawan
    Route::get('/admin/karyawan', [KaryawanController::class, 'index'])->name('admin.karyawan.index');
    Route::get('/admin/karyawan/create', [KaryawanController::class, 'create'])->name('admin.karyawan.create');
    Route::post('/admin/karyawan', [KaryawanController::class, 'store'])->name('admin.karyawan.store');
    Route::get('/admin/karyawan/{id}/edit', [KaryawanController::class, 'edit'])->name('admin.karyawan.edit');
    Route::put('/admin/karyawan/{id}', [KaryawanController::class, 'update'])->name('admin.karyawan.update');
    Route::delete('/admin/karyawan/{id}', [KaryawanController::class, 'destroy'])->name('admin.karyawan.destroy');

    // Manajemen Paket
    Route::get('/admin/paket', [PaketController::class, 'indexPaket'])->name('admin.paket.index');
    Route::get('/admin/paket/create', [PaketController::class, 'createPaket'])->name('admin.paket.create');
    Route::post('/admin/paket', [PaketController::class, 'storePaket'])->name('admin.paket.store');
    Route::get('/admin/paket/{id}/edit', [PaketController::class, 'editPaket'])->name('admin.paket.edit');
    Route::put('/admin/paket/{id}', [PaketController::class, 'updatePaket'])->name('admin.paket.update');
    Route::delete('/admin/paket/{id}', [PaketController::class, 'destroyPaket'])->name('admin.paket.destroy');
});