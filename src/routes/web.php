<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Illuminate\Support\Facades\Http;
use App\Models\Barang;
use App\Http\Controllers\FrontendProdukController;
use App\Http\Controllers\KontakController;


/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/kontak', function () {
    return view('frontend.kontak');
});

Route::get('/produk', function () {
    $produks = Barang::with('kategori')->get(); // pastikan relasi 'kategori' sudah ada di model
    return view('frontend.produk', compact('produks'));
});

Route::post('/kontak', [KontakController::class, 'kirim'])->name('kontak.kirim');

Route::get('/layanan', fn() => view('frontend.layanan'));
Route::get('/tentang', fn() => view('frontend.tentang'));
Route::get('/produk', [FrontendProdukController::class, 'index'])->name('produk.index');


