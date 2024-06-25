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
            $table->string('kode_m')->unique();
            $table->string('nm_brg');
            $table->string('jns_brg');
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
