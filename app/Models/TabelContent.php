<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'surat_masuk_id',
        'baris1',
        'baris2',
        'baris3',
        'baris4',
        'baris5',
        'kolom1',
        'kolom2',
        'kolom3',
        'kolom4',
        'kolom5',
    ];
}
