<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brgm;

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
        return view('barang_masuk.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bm = new Brgm;
        $bm->nm_brg = $request->nama_barang;
        $bm->merk = $request->merk;
        $bm->jenis_brg = $request->jenis;
        $bm->jumlah = $request->jumlah;
        $bm->harga = $request->harga;
        $bm->tgl_msk = $request->tanggal_masuk;
        $bm->save();

        return redirect('/barang_masuk');
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
        $bm = Brgm::find($id);
        return view('barang_masuk.edit',compact('bm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bm = Brgm::find($id);
        $bm->nm_brg = $request->nama_barang;
        $bm->merk = $request->merk;
        $bm->jenis_brg = $request->jenis;
        $bm->jumlah = $request->jumlah;
        $bm->harga = $request->harga;
        $bm->tgl_msk = $request->tanggal_masuk;
        $bm->save();

        return redirect('/barang_masuk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $bm = Brgm::find($id);

    if ($bm) {
        $bm->delete();
        return redirect('/barang_masuk')->with('success', 'Data berhasil dihapus.');
    } else {
        return redirect('/barang_masuk')->with('error', 'Data tidak ditemukan.');
    }
}

}
