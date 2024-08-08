<?php

namespace App\Observers;

namespace App\Observers;

use App\Models\Brgm;
use App\Models\Stok;

class BrgmObserver
{
    /**
     * Handle the Brgm "created" event.
     *
     * @param  \App\Models\Brgm  $brgm
     * @return void
     */
    public function created(Brgm $brgm)
    {
        // Cek atau buat stok dengan kode_s yang sama
        $stok = Stok::firstOrNew(['kode_s' => $brgm->nm_brg]);

        // Update kolom-kolom yang relevan
        $stok->nm_brg = $brgm->nm_brg; // Menggunakan nama_barang dari Brgm
        $stok->jns_brg = $brgm->jenis_brg; // Sesuaikan dengan data sebenarnya atau logika yang sesuai
        $stok->merk = $brgm->merk;
        $stok->harga = $brgm->harga; // Sesuaikan dengan data sebenarnya atau logika yang sesuai
        $stok->stok = ($stok->stok ?? 0) + $brgm->jumlah; // Tambahkan jumlah barang masuk ke stok

        // Set relasi dengan Brgm
        $stok->brgm_id = $brgm->id; // Mengatur ID Brgm ke stok

        // Simpan perubahan ke database
        $stok->save();
    }

    /**
     * Handle the Brgm "updated" event.
     *
     * @param  \App\Models\Brgm  $brgm
     * @return void
     */
    public function updated(Brgm $brgm)
    {
        // Logika untuk menangani pembaruan Brgm jika diperlukan
        // Misalnya, jika ada perubahan pada jumlah barang, update stok
        $stok = Stok::where('brgm_id', $brgm->id)->first();
        if ($stok) {
            $stok->nm_brg = $brgm->nm_brg;
            $stok->jns_brg = $brgm->jenis_brg; // Sesuaikan dengan data sebenarnya atau logika yang sesuai
            $stok->merk = $brgm->merk; // Sesuaikan dengan data sebenarnya atau logika yang sesuai
            $stok->stok = ($stok->stok ?? 0) + $brgm->jumlah; // Tambahkan jumlah barang masuk ke stok
            $stok->save();
        }
    }

    /**
     * Handle the Brgm "deleted" event.
     *
     * @param  \App\Models\Brgm  $brgm
     * @return void
     */
    public function deleted(Brgm $brgm)
    {
        // Logika untuk menangani penghapusan Brgm jika diperlukan
        // Misalnya, hapus atau kurangi stok jika Brgm dihapus
        $stok = Stok::where('brgm_id', $brgm->id)->first();
        if ($stok) {
            // Kurangi atau hapus stok sesuai kebutuhan
            $stok->delete();
        }
    }

    /**
     * Handle the Brgm "restored" event.
     *
     * @param  \App\Models\Brgm  $brgm
     * @return void
     */
    public function restored(Brgm $brgm)
    {
        // Logika untuk menangani pemulihan Brgm jika diperlukan
    }

    /**
     * Handle the Brgm "force deleted" event.
     *
     * @param  \App\Models\Brgm  $brgm
     * @return void
     */
    public function forceDeleted(Brgm $brgm)
    {
        // Logika untuk menangani penghapusan secara permanen Brgm jika diperlukan
    }
}
