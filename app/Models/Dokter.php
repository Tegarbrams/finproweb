<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokter extends Model
{
    //
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari nama model (opsional)
    protected $table = 'dokter';
    protected $guarded = [];


    // Kolom yang boleh diisi secara massal
    protected $fillable = [
        'id',
        'nama_dokter',
        'poli',
        'kontak',
    ];
}
