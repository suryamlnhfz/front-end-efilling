<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomor_surat',
        'tujuan_surat',
        'kategori',
        'deskripsi',
        'penutup',
        'nama_pengirim',
        'penerima',
        'tanggal_terima',
        'flag',
        'nama',
    ];
}
