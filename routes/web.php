<?php

use App\Http\Controllers\MakananController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/makanan', [MakananController::class, 'tampil'])->name('makanan.tampil');
Route::get('/makanan/tambah', [MakananController::class, 'tambah'])->name('makanan.tambah');
Route::post('/makanan/kirim', [MakananController::class, 'kirim'])->name('makanan.kirim');
Route::get('/makanan/edit/{id}', [MakananController::class, 'edit'])->name('makanan.edit');
Route::post('/makanan/update/{id}', [MakananController::class, 'update'])->name('makanan.update');
Route::post('/makanan/delete/{id}', [MakananController::class, 'delete'])->name('makanan.delete');