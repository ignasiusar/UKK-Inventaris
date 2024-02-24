@extends('inventaris.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <strong>Id Supplier:</strong>
            {{ $product->id_supplier }}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <strong>Kode Barang:</strong>
            {{ $product->kode_barang }}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <strong>Nama Barang:</strong>
            {{ $product->nama_barang }}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <strong>Details:</strong>
            {{ $product->spec_barang }}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <strong>Spesifikasi Barang:</strong>
            {{ $product->spec_barang }}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <strong>Kategori Barang:</strong>
            {{ $product->kategori_barang }}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <strong>Kondisi Barang:</strong>
            {{ $product->kondisi_barang }}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <strong>Tanggal Masuk Barang:</strong>
            {{ $product->tgl_msk }}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <strong>Sumber Dana:</strong>
            {{ $product->sumberdana }}
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Image:</strong>
            <img src="{{asset('storage/images/'.$product->images) }}" class="mh-40 mw-50" alt="Product Image">
        </div>
    </div>
</div>
@endsection
