<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stok;

class StokController extends Controller
{
    public function index()
    {
        $stoks = Stok::all(); // Ambil semua data stok
        return view('stok.index', compact('stoks')); // Kirim data ke view
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'kode_s' => 'required|unique:stoks',
            'nm_brg' => 'required',
            'jns_brg' => 'required',
            'merk' => 'required',
            'stok' => 'required|integer',
            'brgm_id' => 'required|integer'
        ]);

        // Simpan data ke database
        Stok::create($validated);

        return redirect()->route('stok.index')->with('success', 'Stok berhasil ditambahkan.');
    }

    // Metode lainnya seperti create, store, edit, update, destroy bisa ditambahkan jika diperlukan
}
