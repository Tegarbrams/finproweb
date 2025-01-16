<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien; // Pastikan Anda memiliki model Pasien

class PasienController extends Controller
{
    // Metode untuk menyimpan data pasien
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'NIK' => 'required|string|max:16|unique:pasien,NIK',
            'nama_pasien' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|in:Laki-Laki,Wanita',
            'penyakit' => 'nullable|string|max:255',
            'asuransi' => 'required|string|max:255',
            'kondisi' => 'required|string|in:Sembuh,Sakit,Parah',
        ]);

        // Simpan data ke database
        $pasien = new Pasien();
        $pasien->NIK = $validatedData['NIK'];
        $pasien->nama_pasien = $validatedData['nama_pasien'];
        $pasien->tanggal_lahir = $validatedData['tanggal_lahir'];
        $pasien->alamat = $validatedData['alamat'];
        $pasien->jenis_kelamin = $validatedData['jenis_kelamin'];
        $pasien->penyakit = $validatedData['penyakit'] ?? null;
        $pasien->asuransi = $validatedData['asuransi'];
        $pasien->kondisi = $validatedData['kondisi'];
        $pasien->save();

        // Redirect dengan pesan sukses
        return redirect()->route('')->with('success', 'Data pasien berhasil disimpan!');
    }
}
