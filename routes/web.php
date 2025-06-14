<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientDashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/dashboard', [ClientDashboardController::class, 'index'])->name('client.dashboard');
});

require __DIR__.'/auth.php';
