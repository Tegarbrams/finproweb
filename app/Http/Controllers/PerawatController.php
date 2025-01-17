<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perawat;


class PerawatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("kerangka/perawat", [
            'perawat' => Perawat::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('kerangka/tambah_perawat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $perawat = new Perawat();
        $perawat->id = $request->id;
        $perawat->nama_perawat = $request->nama_perawat;    
        $perawat->poli = $request->poli;    
        $perawat->kontak = $request->kontak;
        $perawat->save();  
        
        // Redirect dengan pesan sukses
        return redirect()->route('perawat.index')->with('success', 'Data perawat berhasil disimpan!');

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
        $perawat = Perawat::find($id);
        return view('kerangka.edit_perawat', [
            'perawat'=> $perawat,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $perawat = Perawat::find($id);
        $perawat->nama_perawat = $request->nama_perawat;
        $perawat->poli = $request->poli;
        $perawat->kontak = $request->kontak;
        $perawat->save();

        return redirect()->route('perawat.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $perawat = Perawat::find($id);
        $perawat->delete();
        return redirect()->route('perawat.index')->with('success','');
    }
}
