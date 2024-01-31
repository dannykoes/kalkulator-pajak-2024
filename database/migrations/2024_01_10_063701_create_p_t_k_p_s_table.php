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
        Schema::create('ptkp', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('jenis');
            $table->integer('jumlah_tanggungan');
            $table->double('nominal');
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
        Schema::dropIfExists('ptkp');
    }
};
