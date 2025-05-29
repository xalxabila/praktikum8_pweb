<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;

Route::get('/listproduk', [ListProdukController::class, 'show'] );
Route::post('/produk/simpan', [ListProdukController::class, 'simpan'])->name('produk.simpan');

