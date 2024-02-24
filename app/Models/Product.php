<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_barang', 'nama_barang','spec_barang','kategori_barang','jumlah_barang','kondisi_barang','tgl_msk','id_supplier','sumberdana','images',
    ];

    public function author()
    {
        return $this->belongsTo(Supplier::class,"kode_barang","id_supplier");
    }
    
}
