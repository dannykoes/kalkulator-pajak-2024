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
        Schema::create('pkp', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->double('tarif_pajak');
            $table->double('angka_awal');
            $table->double('angka_akhir');
            $table->uuid('merchant_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pkp');
    }
};
