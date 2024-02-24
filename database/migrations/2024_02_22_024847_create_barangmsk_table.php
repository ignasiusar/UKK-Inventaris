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
        Schema::create('barangmsk', function (Blueprint $table) {
            $table->id();
            $table->string('id_msk_brng');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->string('tanggal_masuk');
            $table->string('jumlah_barang');
            $table->string('kode_supplier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangmsk');
    }
};
