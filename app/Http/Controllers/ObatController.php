<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("kerangka/stok", [
            'obat' => Obat::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('kerangka/tambah_obat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $obat = new Obat();
        $obat->id = $request->id;
        $obat->nama_obat = $request->nama_obat;
        $obat->varian = $request->varian;
        $obat->stok = $request->stok;
        $obat->save();

        // Redirect dengan pesan sukses
        return redirect()->route('obat.index')->with('success', 'Data obat berhasil disimpan!');
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
        $obat = Obat::find($id);
        return view('kerangka.edit_obat', [
            'obat' => $obat,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $obat = Obat::find($id);
        $obat->nama_obat = $request->nama_obat;
        $obat->varian = $request->varian;
        $obat->stok = $request->stok;
        $obat->save();

        // Redirect dengan pesan sukses
        return redirect()->route('obat.index')->with('success', 'Data pasien berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $obat = Obat::find($id);
        $obat->delete();
        return redirect()->route('obat.index')->with('success','');
    }
}
