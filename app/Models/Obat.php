<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Obat extends Model
{
    //
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari nama model (opsional)
    protected $table = 'obat';
    protected $guarded = [];


    // Kolom yang boleh diisi secara massal
    protected $fillable = [
        'id',
        'nama_obat',
        'varian',
        'stok',
    ];
}
