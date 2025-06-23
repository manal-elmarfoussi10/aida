<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// ✅ Admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// ✅ Client routes
Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/dashboard', [ClientDashboardController::class, 'index'])->name('client.dashboard');

    // CORRIGÉ : Route dynamique avec données simulées
    Route::get('/zones', function () {
        $zones = [
            [
                'name' => 'Zone A',
                'type' => 'Bureau',
                'status' => 'on',
                'occupancy' => '12 personnes',
                'temperature' => '22°C / 40%',
                'energy' => '100 kWh'
            ],
            [
                'name' => 'Zone B',
                'type' => 'Atelier',
                'status' => 'off',
                'occupancy' => '0',
                'temperature' => '20°C / 50%',
                'energy' => '75 kWh'
            ],
            [
                'name' => 'Zone C',
                'type' => 'Salle serveurs',
                'status' => 'on',
                'occupancy' => '2 personnes',
                'temperature' => '18°C / 35%',
                'energy' => '200 kWh'
            ]
        ];

        return view('client.zones', compact('zones'));
    })->name('client.zones');

    // Les autres vues statiques (à corriger plus tard si besoin de data)
    Route::view('/network', 'client.network')->name('client.network');
    Route::view('/configuration', 'client.configuration')->name('client.configuration');
    Route::view('/control', 'client.control')->name('client.control');
    Route::view('/reports', 'client.reports')->name('client.reports');
    Route::view('/settings', 'client.settings')->name('client.settings');
});

// ✅ Logout route personnalisée
Route::get('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

// Auth scaffolding (Laravel Breeze, Jetstream, etc.)
require __DIR__.'/auth.php';
