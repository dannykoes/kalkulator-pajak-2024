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
        Schema::create('ptkp_2024', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->uuid('merchant_id')->nullable();
            $table->json('kategori');
            $table->double('nominal_awal');
            $table->double('nominal_akhir');
            $table->double('tarif_pajak');
            $table->string('nama');
            $table->integer('type_pegawai')->comment('0: Pegawai Tetap, 1: Harian, 2: Bukan Pegawai');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptkp_2024');
    }
};
