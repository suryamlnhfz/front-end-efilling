<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuratMasukController;
use App\Models\SuratMasuk;
use Illuminate\Support\Facades\Route;

Route::get('test_pdf', function () {
    return view('welcome');
});

Route::get('penyimpanan', function() {
    return view('surat.penyimpanan');
});


Route::resource('/', DashboardController::class)->name('index', '/.index');
// Route::resource('');
Route::get('form-tambah', [SuratMasukController::class, 'form_tambah']);
Route::resource('surat-masuk', SuratMasukController::class)->name('index', 'surat-masuk.index');
Route::resource('tambah_surat', SuratMasukController::class)->name('store', 'tambah_surat.store');