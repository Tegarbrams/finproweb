<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("kerangka/tabel", [
            'pasien' => Pasien::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         // Validasi data yang diterima
        //  $validatedData = $request->validate([
        //     'NIK' => 'required|string|max:16|unique:pasien,NIK',
        //     'nama_pasien' => 'required|string|max:255',
        //     'tanggal_lahir' => 'required|date',
        //     'alamat' => 'required|string|max:255',
        //     'jenis_kelamin' => 'required|string|in:Laki-Laki,Wanita',
        //     'penyakit' => 'nullable|string|max:255',
        //     'asuransi' => 'required|string|max:255',
        //     'kondisi' => 'required|string|in:Sembuh,Sakit,Parah',
        // ]);

       // try {
            // Simpan data ke database
            $pasien = new Pasien();
            $pasien->NIK = $request->NIK;
            $pasien->nama_pasien = $request->nama_pasien;
            $pasien->tanggal_lahir = $request->tanggal_lahir;
            $pasien->alamat = $request->alamat;
            $pasien->jenis_kelamin = $request->jenis_kelamin;
            $pasien->penyakit = $request->penyakit ?? null;
            $pasien->asuransi = $request->asuransi;
            $pasien->kondisi = $request->kondisi;
            $pasien->save();

            // Redirect dengan pesan sukses
            return redirect()->route('post.index')->with('success', 'Data pasien berhasil disimpan!');
       // } catch (\Exception $e) {
            // Jika terjadi error, redirect dengan pesan error
        //    return redirect()->route('post.create')->with('error', 'Terjadi kesalahan saat menyimpan data pasien.');
       // }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit ($id)
    {
        //
        $pasien = Pasien::find($id);
        return view('kerangka.edit', [
            'pasien' => $pasien,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pasien = Pasien::find($id);

        $pasien->delete();

        return redirect()->route('post.index')->with('success', 'Data pasien berhasil dihapus!');
    }
}
