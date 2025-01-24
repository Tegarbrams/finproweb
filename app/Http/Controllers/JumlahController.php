<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Obat;
use App\Models\Perawat;
use App\Models\Dokter;

class JumlahController extends Controller
{
    //
    public function jumlah()
    {
        // Hitung jumlah data
        $jumlah_pasien = Pasien::count();
        $jumlah_obat = Obat::count();
        $jumlah_perawat = Perawat::count();
        $jumlah_dokter = Dokter::count();

        // Kirim data ke view
        return view('kerangka/dashboard', compact('jumlah_obat'));
    }
}
