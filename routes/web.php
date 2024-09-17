<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuratMasukController;
use App\Models\SuratMasuk;
use Illuminate\Support\Facades\Route;

Route::get('test_pdf', function () {
    return view('template_surat.welcome');
});

Route::get('penyimpanan', function() {
    return view('arsip.penyimpanan');
});



Route::get('cetak-surat/cetak_surat/{id}', [SuratMasukController::class, 'cetak_surat'])->name('cetak-surat.cetak_surat');
Route::resource('/', DashboardController::class)->name('index', '/.index');
// Route::resource('');
Route::get('form-tambah', [SuratMasukController::class, 'form_tambah']);
Route::resource('surat-masuk', SuratMasukController::class);
Route::resource('tambah_surat', SuratMasukController::class);
// Route::get('surat/edit/{id}', [SuratMasukController::class, 'edit'])->name('surat.edit');
Route::get('surat/edit/{id}', [SuratMasukController::class, 'edit'])->name('surat.edit');

