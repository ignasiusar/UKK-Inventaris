<?php
  
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
  
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam', function (Blueprint $table) {
            $table->id();
            $table->string('no_pinjam');
            $table->string('tgl_pinjam');
            $table->string('kode_barang');
            $table->string('jml_pinjam');
            $table->string('nama_peminjam');
            $table->string('tgl_kembali');
            $table->string('nama_barang');
            $table->string('keterangan');
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
        Schema::dropIfExists('pinjam');
    }
};