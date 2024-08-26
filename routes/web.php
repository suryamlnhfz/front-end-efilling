<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('dashboard.index');
});
Route::get('penyimpanan', function() {
    return view('surat_masuk.penyimpanan');
});

Route::get('tambah_data', function() {
    return view('surat_masuk.form_tambah');
});

