<?php

namespace App\Observers;

use App\Models\Brgk;
use App\Models\Stok;

class BrgkObserver
{
    /**
     * Handle the Brgk "created" event.
     *
     * @param  \App\Models\Brgk  $brgk
     * @return void
     */
    public function created(Brgk $brgk)
    {
        // Cek stok berdasarkan kode_s dari barang keluar
        $stok = Stok::where('kode_s', $brgk->nm_brg)->first();
        
        if ($stok) {
            // Periksa apakah stok mencukupi
            if ($stok->stok < $brgk->jumlah) {
                // Jika stok tidak mencukupi, lemparkan exception atau tangani sesuai kebutuhan
                throw new \Exception('Stok tidak mencukupi untuk transaksi ini.');
            }

            // Kurangi stok
            $stok->stok -= $brgk->jumlah;
            $stok->save();
        } else {
            // Jika tidak ditemukan stok yang cocok, lemparkan exception atau tangani sesuai kebutuhan
            throw new \Exception('Stok tidak ditemukan untuk barang ini.');
        }
    }

    /**
     * Handle the Brgk "updated" event.
     *
     * @param  \App\Models\Brgk  $brgk
     * @return void
     */
    public function updated(Brgk $brgk)
    {
        // Jika diperlukan, tambahkan logika untuk menangani pembaruan Brgk
    }

    /**
     * Handle the Brgk "deleted" event.
     *
     * @param  \App\Models\Brgk  $brgk
     * @return void
     */
    public function deleted(Brgk $brgk)
    {
        // Jika diperlukan, tambahkan logika untuk menangani penghapusan Brgk
    }

    /**
     * Handle the Brgk "restored" event.
     *
     * @param  \App\Models\Brgk  $brgk
     * @return void
     */
    public function restored(Brgk $brgk)
    {
        // Jika diperlukan, tambahkan logika untuk menangani pemulihan Brgk
    }

    /**
     * Handle the Brgk "force deleted" event.
     *
     * @param  \App\Models\Brgk  $brgk
     * @return void
     */
    public function forceDeleted(Brgk $brgk)
    {
        // Jika diperlukan, tambahkan logika untuk menangani penghapusan permanen Brgk
    }
}
