@extends('inventaris.layout')
     
@section('content')
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data"> 
    @csrf
    @method('PUT')

    <div class="form-group row mb-3">
        <label for="idsupp" class="col-sm-2 col-form-label">ID Supplier</label>
        <div class="col-sm-4">
            <input type="text" name="id_supplier" value="{{ $product->id_supplier }}" class="form-control" placeholder="ID Supplier">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="idBarang" class="col-sm-2 col-form-label">ID Barang</label>
        <div class="col-sm-4">
            <input type="text" name="kode_barang" value="{{ $product->kode_barang }}" class="form-control" placeholder="ID Barang">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-4">
            <input type="text" name="nama_barang" value="{{ $product->nama_barang }}" class="form-control" placeholder="Nama Barang">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="detail" class="col-sm-2 col-form-label">Spesifikasi Barang</label>
        <div class="col-sm-10">
            <textarea class="form-control" style="height:150px" name="spec_barang" placeholder="Detail">{{ $product->spec_barang }}</textarea>
        </div>
    </div>
    
    <div class="form-group row mb-3">
        <label for="kategoriBarang" class="col-sm-2 col-form-label">Kategori Barang</label>
        <div class="col-sm-4">
            <input type="text" name="kategori_barang" value="{{ $product->kategori_barang }}" class="form-control" placeholder="Kategori Barang">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="jumlahBarang" class="col-sm-2 col-form-label">Jumlah Barang</label>
        <div class="col-sm-4">
            <input type="text" name="jumlah_barang" value="{{ $product->jumlah_barang }}" class="form-control" placeholder="Jumlah Barang">
        </div>
    </div>

    <div class="form-group row mb-3">
    <div class="col-sm-4">
        <label for="kondisibarang" class="col-sm-2 col-form-label">Kondisi Barang:</label>
        <select class="form-select" name="kondisi_barang" >
                        <option selected>{{ $product->kondisi_barang }}</option>
                        <option value="Sangat Baik (Baru) "> Sangat Baik (baru)</option>
                        <option value="Baik">Baik</option>
                        <option value="Kurang Baik">Kurang Baik</option>
                        <option value="RUsak Berat">Rusak Berat</option>
</select>
    </div>
    </div>

    <div class="form-group row mb-3">
        <label for="kondisiBarang" class="col-sm-2 col-form-label">Tanggal Masuk Barang</label>
        <div class="col-sm-4">
            <input type="date" name="tgl_msk" value="{{ $product->tgl_msk }}" class="form-control" placeholder="Tanggal Masuk">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="kondisiBarang" class="col-sm-2 col-form-label">Sumber Dana</label>
        <div class="col-sm-4">
            <input type="text" name="sumberdana" value="{{ $product->sumberdana }}" class="form-control" placeholder="sumber dana">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="images" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-4">
            <input type="file" name="images" class="form-control" placeholder="image">
            <img src="{{ asset('storage/images/'.$product->images) }}" width="300px">
        </div>
    </div>

    <div class="form-group row mb-3">
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
