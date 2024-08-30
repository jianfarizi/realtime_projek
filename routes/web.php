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




route::get('/', [LandingController::class, 'index']);

route::get('login', [loginController::class, 'index'])->name('login');
route::post('login', [loginController::class, 'login'])->name('login.auth');

route::get('register', [registerController::class, 'index'])->name('register');
route::post('register', [registerController::class, 'store'])->name('register.store');

route::get('galeri', [GaleriController::class, 'index'])->name('galeri');
route::get('galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
route::post('galeri/', [GaleriController::class, 'store'])->name('galeri.store');
route::get('galeri/edit/{id}', [GaleriController::class, 'edit'])->name('galeri.edit');
route::put('galeri/{id}', [GaleriController::class, 'update'])->name('galeri.update');
route::delete('galeri/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard');


route::get('pendaki', [PendakiController::class, 'index'])->name('pendaki');
route::get('pendaki/create', [PendakiController::class, 'create'])->name('pendaki.create');
route::post('pendaki/', [PendakiController::class, 'store'])->name('pendaki.store');
route::get('pendaki/edit/{id}', [PendakiController::class, 'edit'])->name('pendaki.edit');
route::put('pendaki/{id}', [PendakiController::class, 'update'])->name('pendaki.update');
route::delete('pendaki/{id}', [PendakiController::class, 'destroy'])->name('pendaki.destroy');

route::get('sampah', [SampahController::class, 'index'])->name('sampah');
route::get('sampah/create', [SampahController::class, 'create'])->name('sampah.create');
route::post('sampah/', [SampahController::class, 'store'])->name('sampah.store');
route::delete('sampah/{id}', [SampahController::class, 'destroy'])->name('sampah.destroy');

route::get('laporan', [laporanController::class, 'index'])->name('laporan');
route::get('laporan1', [laporanController::class, 'create'])->name('laporan1');
// route::get('laporan/', [laporanController::class, 'store'])->name('laporan.store');
route::get('laporan/show', [laporanController::class, 'show'])->name('laporan/show');
Route::get('/laporan-data', [LaporanController::class, 'getLaporanData'])->name('laporan.data');
