<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Transaksi_detailController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\JenisController;


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
    return view('layout.index');
});
Route::get('/dasboard', function () {
    return view('layout.dasboard');
});

//ADMIN
Route::get('/admin',[AdminController::class,'index']);
Route::get('/admin/tambah', [AdminController::class,'tambah']);
Route::post('/admin/tampil', [AdminController::class,'tampil']);
Route::get('/admin/hapus/{id}', [AdminController::class,'hapus']);
Route::get('/admin/edit/{id}', [AdminController::class,'edit']);
Route::post('/admin/edit/{id}', [AdminController::class,'update']);

//barang

Route::get('/barang',[BarangController::class,'index']);
Route::get('/barang/tambah', [BarangController::class,'tambah']);
Route::post('/barang/tampil', [BarangController::class,'tampil']);
Route::get('/barang/hapus/{id}', [BarangController::class,'hapus']);
Route::get('/barang/edit/{id}', [BarangController::class,'edit']);
Route::post('/barang/edit/{id}', [BarangController::class,'update']);

//transaksi

Route::get('/transaksi',[TransaksiController::class,'index']);
Route::get('/transaksi/tambah', [TransaksiController::class,'tambah']);
Route::post('/transaksi/tampil', [TransaksiController::class,'tampil']);
Route::get('/transaksi/hapus/{id}', [TransaksiController::class,'hapus']);
Route::get('/transaksi/edit/{id}', [TransaksiController::class,'edit']);
Route::post('/transaksi/edit/{id}', [TransaksiController::class,'update']);

//transaksi_detail

Route::get('/transaksi_detail',[Transaksi_detailController::class,'index']);
Route::get('/transaksi_detail/tambah', [Transaksi_detailController::class,'tambah']);
Route::post('/transaksi_detail/tampil', [Transaksi_detailController::class,'tampil']);
Route::get('/transaksi_detail/hapus/{id}', [Transaksi_detailController::class,'hapus']);
Route::get('/transaksi_detail/edit/{id}', [Transaksi_detailController::class,'edit']);
Route::post('/transaksi_detail/edit/{id}', [Transaksi_detailController::class,'update']);

//supplier

Route::get('/supplier',[SupplierController::class,'index']);
Route::get('/supplier/tambah', [SupplierController::class,'tambah']);
Route::post('/supplier/tampil', [SupplierController::class,'tampil']);
Route::get('/supplier/hapus/{id}', [SupplierController::class,'hapus']);
Route::get('/supplier/edit/{id}', [SupplierController::class,'edit']);
Route::post('/supplier/edit/{id}', [SupplierController::class,'update']);

//jenis

Route::get('/jenis',[JenisController::class,'index']);
Route::get('/jenis/tambah', [JenisController::class,'tambah']);
Route::post('/jenis/tampil', [JenisController::class,'tampil']);
Route::get('/jenis/hapus/{id}', [JenisController::class,'hapus']);
Route::get('/jenis/edit/{id}', [JenisController::class,'edit']);
Route::post('/jenis/edit/{id}', [JenisController::class,'update']);