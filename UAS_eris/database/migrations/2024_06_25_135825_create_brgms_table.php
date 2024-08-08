<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('brgms', function (Blueprint $table) {
            $table->id();
            $table->string('nm_brg');
            $table->string('merk');
            $table->string('jenis_brg');
            $table->string('jumlah');
            $table->string('harga');
            $table->date('tgl_msk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brgms');
    }
};
