<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriBarangController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MasterBarangController;
use App\Http\Controllers\PenjualanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin', [DashboardController::class, 'index'])->name('home.admin');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/store', [HomeController::class, 'store'])->name('home.store');

Route::resource('kategori_barang', KategoriBarangController::class);

Route::prefix('master_barang')->controller(MasterBarangController::class)->group(function () {
    Route::get('/', 'index')->name('master_barang.index');
    Route::get('/create', 'create')->name('master_barang.create');
    Route::post('/', 'store')->name('master_barang.store');
    Route::get('/{id}/edit', 'edit')->name('master_barang.edit');
    Route::put('/{id}', 'update')->name('master_barang.update');
    Route::delete('/{id}', 'destroy')->name('master_barang.destroy');
});

Route::prefix('penjualan')->controller(PenjualanController::class)->group(function () {
    Route::get('/', 'index')->name('penjualan.index');
    Route::get('/create', 'create')->name('penjualan.create');
    Route::post('/', 'store')->name('penjualan.store');
    Route::get('/{id}/edit', 'edit')->name('penjualan.edit');
    Route::put('/{id}', 'update')->name('penjualan.update');
    Route::delete('/{id}', 'destroy')->name('penjualan.destroy');
});





