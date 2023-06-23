<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DaftarBeritaController;

use App\Http\Controllers\ReservationController;

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

Route::get('/', function () {
    return redirect()->route('login');
});

//page react button


//page laravel?


Auth::routes();

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
    Route::resource('kategori', KategoriController::class);
    Route::get('daftarberita', [DaftarBeritaController::class, 'index'])->name('daftarberita.index');
    Route::get('daftarberita/{id}/pembayaran', [DaftarBeritaController::class, 'pembayaran'])->name('daftarberita.pembayaran');
    Route::put('daftarberita/{id}', [DaftarBeritaController::class, 'bayar'])->name('daftarberita.bayar');
    Route::get('admin/history', [BeritaController::class, 'historyadmin'])->name('history.historyadmin');
    Route::get('history/{id}/detailhistorypembayaran', [BeritaController::class, 'detailhistoryadmin'])->name('history.detailhistoryadmin');
});

Route::middleware(['auth', 'penulis'])->group(function () {
    Route::get('penulis/dashboard', [DashboardController::class, 'penulis'])->name('penulis.dashboard');
    Route::get('berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::get('history/history', [BeritaController::class, 'history'])->name('history.history');
    Route::get('history/{id}/detailhistorycustomer', [BeritaController::class, 'detailhistorycustomer'])->name('history.detailhistorycustomer');
    
});
