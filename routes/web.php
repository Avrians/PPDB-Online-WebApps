<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HasilSAWController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index']);

Route::get('/daftar', [PendaftaranController::class, 'index']);
Route::post('/daftar', [PendaftaranController::class, 'store']);
Route::get('/hasil', [PendaftaranController::class, 'hasil']);

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->middleware('auth');
    Route::get('/detail/{id}', [AdminController::class, 'detail'])->name('detail-siswa');
    Route::put('/editdata/{id}', [AdminController::class, 'editData'])->middleware('auth');
    Route::get('/hapusdata/{id}', [PendaftaranController::class, 'hapusData'])->middleware('auth');
    Route::get('/mendaftar', [AdminController::class, 'mendaftar'])->middleware('auth');
    Route::post('/mendaftar/store', [AdminController::class, 'mendaftarStore']);
    Route::get('/diterima', [AdminController::class, 'diterima'])->middleware('auth');
    Route::get('/gagal', [AdminController::class, 'gagal'])->middleware('auth');
    Route::get('/tambahdata', [AdminController::class, 'tambahData'])->middleware('auth');
    Route::get('/kategori/edit/{id}', [HasilSAWController::class, 'kategoriEdit'])->middleware('auth');
    Route::put('/kategori/store/{id}', [HasilSAWController::class, 'kategoriStore']);
    Route::get('/penilaian', [AdminController::class, 'penilaian'])->middleware('auth');
    Route::get('/kategori', [HasilSAWController::class, 'kategori'])->middleware('auth');
    Route::get('/perhitungan', [HasilSAWController::class, 'normalisasi'])->middleware('auth');
    Route::get('/rank', [HasilSAWController::class, 'index'])->middleware('auth');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


// Route Halaman admin
Route::middleware(['auth'])->group(function () {
});
