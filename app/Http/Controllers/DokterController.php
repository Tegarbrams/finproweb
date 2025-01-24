<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("kerangka/dokter", [
            "dokter"=> Dokter::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("kerangka/tambah_dokter");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $dokter = new Dokter();
        $dokter->id = $request->id;
        $dokter->nama_dokter = $request->nama_dokter;    
        $dokter->poli = $request->poli;    
        $dokter->kontak = $request->kontak;
        $dokter->save();  
        
        // Redirect dengan pesan sukses
        return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil disimpan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $dokter = Dokter::find($id);
        return view('kerangka.edit_dokter', [
            'dokter'=> $dokter,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $dokter = Dokter::find($id);
        $dokter->nama_dokter = $request->nama_dokter;
        $dokter->poli = $request->poli;
        $dokter->kontak = $request->kontak;
        $dokter->save();

        return redirect()->route('dokter.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $dokter = Dokter::find($id);
        $dokter->delete();
        return redirect()->route('dokter.index')->with('success','');
    }

    public function jumlah_dokter()
    {
        // Hitung jumlah data
        $jumlah_dokter = Dokter::count();

        // Kirim data ke view
        return view('kerangka/dashboard', compact('jumlah_dokter'));
    }
}
