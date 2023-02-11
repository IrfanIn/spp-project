<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\UserController;

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'login'])->name('post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('dashboard/history', [DashboardController::class, 'histori'])->name('histori')->middleware('auth:user,siswa');

Route::middleware('auth:user')->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('siswa', siswaController::class);
    Route::resource('kelas', KelasController::class);
    Route::resource('spp', SppController::class);
    Route::resource('user', UserController::class);
    Route::resource('pembayaran', pembayaranController::class);
});
