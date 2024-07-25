<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\Brgm;

class BrgmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $bm = Brgm::all();
        return view('barang_masuk.index',compact('nomor','bm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bm = Brgm::all();
        return view('barang_masuk.index',compact('nomor','bm'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bm = new Brgm;
        $bm->nama_barang = $request->nama_barang;
        $bm->jumlah = $request->jumlah;
        $bm->harga = $request->harga;
        $bm->tanggal_masuk = $request->tanggal_masuk;
        $bm->save();

        return redirect('/barang_masuk/');
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
    }
}
