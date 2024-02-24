<?php
  
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\QueryException;
  
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("kode_barang")->nullable();
            // $table->foreign("kode_barang")->references("id_supplier")->on("suppliers");
            $table->string('images');
            // $table->string('kode_barang');
            $table->string('nama_barang');
            $table->string('spec_barang');
            $table->string('kategori_barang');
            $table->string('jumlah_barang');
            $table->string('kondisi_barang');
            $table->string('sumberdana');
            // $table->string('tgl_masuk');
            $table->string('id_supplier');
            $table->string('tgl_msk');
            $table->timestamps();

        });
    }
  
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};