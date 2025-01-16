<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Pasien;

class Pasien extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari nama model (opsional)
    protected $table = 'pasien';
    protected $guarded = [];


    // Kolom yang boleh diisi secara massal
    protected $fillable = [
        'id',
        'NIK',
        'nama_pasien',
        'tanggal_lahir',
        'alamat',
        'jenis_kelamin',
        'penyakit',
        'asuransi',
        'kondisi',
    ];

    // Definisikan tipe data kolom jika perlu
    protected $casts = [
        'tanggal_lahir' => 'date',
        'jenis_kelamin' => 'string',
        'asuransi' => 'string',
        'kondisi' => 'string',
    ];
}
