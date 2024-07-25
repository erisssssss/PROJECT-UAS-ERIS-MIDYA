<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\Brgk;

class BrgkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $bk = Brgk::all();
        return view('barang_keluar.index',compact('nomor','bk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bk = Brgk::all();
        return view('barang_keluar.index',compact('nomor','bm'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bk = new Brgk;
        $bk->nama_barang = $request->nama_barang;
        $bk->jumlah = $request->jumlah;
        $bk->harga = $request->harga;
        $bk->tanggal_keluar = $request->tanggal_keluar;
        $bk->save();

        return redirect('/barang_keluar/');
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
