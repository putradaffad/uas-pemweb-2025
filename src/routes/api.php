<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\TransaksiController;

// ==========================
// ✅ API Barang
// ==========================
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/{id}', [BarangController::class, 'show']);
Route::get('/notifikasi/stok-menipis', [BarangController::class, 'stokMenipis']);

// ==========================
// ✅ API Transaksi
// ==========================
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::post('/transaksi', [TransaksiController::class, 'store']);
Route::get('/transaksi/barang/{id}', [TransaksiController::class, 'byBarang']);
