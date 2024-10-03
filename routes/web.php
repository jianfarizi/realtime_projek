<?php
use App\Models\Laporan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PendakiController;
use App\Http\Controllers\SampahController;
use App\Http\Controllers\LandingController;
use App\Http\Middleware\checkauth;



route::get('/', [LandingController::class, 'index']);

route::get('login', [loginController::class, 'index'])->name('login');
route::post('login', [loginController::class, 'login'])->name('login.auth');

route::get('register', [registerController::class, 'index'])->name('register');
route::post('register', [registerController::class, 'store'])->name('register.store');




Route::middleware('checkauth:admin')->group(function () {
    Route::get('galeri', [GaleriController::class, 'index'])->name('galeri');
    Route::get('tes', [GaleriController::class, 'tes']);
    Route::get('galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
    Route::post('galeri/', [GaleriController::class, 'store'])->name('galeri.store');
    Route::get('galeri/edit/{id}', [GaleriController::class, 'edit'])->name('galeri.edit');
    Route::put('galeri/{id}', [GaleriController::class, 'update'])->name('galeri.update');
    Route::delete('galeri/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('pendaki', [PendakiController::class, 'index'])->name('pendaki');
    Route::get('pendaki/create', [PendakiController::class, 'create'])->name('pendaki.create');
    Route::post('pendaki/', [PendakiController::class, 'store'])->name('pendaki.store');
    Route::get('pendaki/edit/{id}', [PendakiController::class, 'edit'])->name('pendaki.edit');
    Route::put('pendaki/{id}', [PendakiController::class, 'update'])->name('pendaki.update');
    Route::delete('pendaki/{id}', [PendakiController::class, 'destroy'])->name('pendaki.destroy');

    Route::get('sampah', [SampahController::class, 'index'])->name('sampah');
    Route::get('sampah/create', [SampahController::class, 'create'])->name('sampah.create');
    Route::post('sampah/', [SampahController::class, 'store'])->name('sampah.store');
    Route::delete('sampah/{id}', [SampahController::class, 'destroy'])->name('sampah.destroy');
    Route::get('laporan', [LaporanController::class, 'index'])->name('laporan');
    
    });
Route::middleware('checkauth:user')->group(function () {
    Route::get('laporan1', [LaporanController::class, 'create'])->name('laporan1');
    Route::get('laporan/show', [LaporanController::class, 'show'])->name('laporan/show');
    Route::get('/laporan-data', [LaporanController::class, 'getLaporanData'])->name('laporan.data');

});