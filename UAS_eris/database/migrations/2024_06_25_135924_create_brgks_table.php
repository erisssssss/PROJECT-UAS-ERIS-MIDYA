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
        Schema::create('brgks', function (Blueprint $table) {
            $table->id();
            $table->string('kode_k')->unique();
            $table->string('nm_brg');
            $table->string('jns_brg');
            $table->date('tgl_klr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brgks');
    }
};
