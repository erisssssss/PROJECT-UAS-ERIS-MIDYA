<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('stoks', function (Blueprint $table) {
            $table->id();
            $table->string('kode_s')->unique();
            $table->string('nm_brg');
            $table->string('jns_brg');
            $table->string('merk');
            $table->string('harga');
            $table->integer('stok');
            $table->unsignedBigInteger('brgm_id');
            $table->unsignedBigInteger('brgk_id')->nullable();
            $table->timestamps();

            $table->foreign('brgm_id')->references('id')->on('brgms')->onDelete('cascade');
            $table->foreign('brgk_id')->references('id')->on('brgks')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('stoks');
    }
};      

