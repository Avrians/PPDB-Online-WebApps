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
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/detail/{id}', [AdminController::class, 'detail'])->name('detail-siswa');
    Route::put('/editdata/{id}', [AdminController::class, 'editData']);
    Route::get('/hapusdata/{id}', [PendaftaranController::class, 'hapusData']);
    Route::get('/mendaftar', [AdminController::class, 'mendaftar']);
    Route::get('/diterima', [AdminController::class, 'diterima']);
    Route::get('/gagal', [AdminController::class, 'gagal']);

    Route::get('/tambahdata', function () {
        return view('admin.tambahdata');
    });
    Route::get('/penilaian', function () {
        return view('admin.penilaian');
    });
    Route::get('/kategori', [HasilSAWController::class, 'kategori']);
    Route::get('/perhitungan', [HasilSAWController::class, 'normalisasi']);
    Route::get('/rank', [HasilSAWController::class, 'index']);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);


// Route Halaman admin
Route::middleware(['auth'])->group(function () {
});
