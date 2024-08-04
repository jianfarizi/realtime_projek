<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\GaleriController;

Route::get('/', function () {
    return view('welcome');
});

route::get('login', [loginController::class, 'index'])->name('login');
route::post('login', [loginController::class, 'login'])->name('login.auth');

route::get('register', [registerController::class, 'index'])->name('register');
route::post('register', [registerController::class, 'store'])->name('register.store');

route::get('galeri', [GaleriController::class, 'index'])->name('galeri');

route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard');


route::get('laporan', [laporanController::class, 'index'])->name('laporan');
route::get('laporan1', [laporanController::class, 'create'])->name('laporan1');
