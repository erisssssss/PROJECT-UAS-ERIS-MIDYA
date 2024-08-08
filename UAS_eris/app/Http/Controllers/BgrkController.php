<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brgk;

class BgrkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $bk = brgk::all();
        return view('barang_keluar.index',compact('nomor','bk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bk = brgk::all();
        return view('barang_keluar.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bk = new brgk;
        $bk->nm_brg = $request->nama_barang;
        $bk->merk = $request->merk;
        $bk->jenis_brg = $request->jenis;
        $bk->jumlah = $request->jumlah;
        $bk->harga = $request->harga;
        $bk->tgl_klr = $request->tanggal_keluar;
        $bk->save();

        return redirect('/barang_keluar');
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
        $bk = brgk::find($id);
        return view('barang_keluar.edit',compact('bk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bk = brgk::find($id);
        $bk->nm_brg = $request->nama_barang;
        $bk->merk = $request->merk;
        $bk->jenis_brg = $request->jenis;
        $bk->jumlah = $request->jumlah;
        $bk->harga = $request->harga;
        $bk->tgl_klr = $request->tanggal_keluar;
        $bk->save();

        return redirect('/barang_keluar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bk = brgk::find($id);
        $bk->delete();
        return redirect('/barang_keluar');
    }
}
