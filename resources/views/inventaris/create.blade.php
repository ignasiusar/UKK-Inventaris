@extends('inventaris.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 mt-2">
        <div class="pull-left">
            <h2>Add New Product Inventaris</h2>
        </div>
        
    </div>
</div>
     
@if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Whoops!',
            text: 'There were some problems with your input.',
            html: `<ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>`
        })
    </script>
@endif
     
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf  
    <div class="row">
        
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Supplier</strong>
                <input type="text" name="id_supplier" class="form-control" placeholder="id supplier">
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Barang</strong>
                <input type="text" name="kode_barang" class="form-control" placeholder="ID Barang">
            </div>
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Spesifikasi:</strong>
                <textarea class="form-control" style="height:150px" name="spec_barang" placeholder="Spesifikasi Barang"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori:</strong>
                <input class="form-control" style="height:50px" name="kategori_barang" placeholder="Kategori Barang"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Barang:</strong>
                <input type="number" class="form-control" name="jumlah_barang" placeholder="Jumlah Barang"></input>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                        <label for="exampleFormControlSelect1" class="form-label"><strong>Kondisi Barang: </strong></label>
                        <select class="form-select" name="kondisi_barang" aria-label="Default select example">
                          <option selected>Sangat Baik</option>
                          <option value="Baik">Baik</option>
                          <option value="Kurang Baik">Kurang Baik</option>
                          <option value="Rusak Berat">Rusak Berat</option>
                        </select>
        </div>
                      </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Masuk</strong>
                <input type="date" name="tgl_msk" class="form-control" placeholder="Tanggal Masuk Barang">
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                        <label for="exampleFormControlSelect1" class="form-label"><strong>Sumber Dana: </strong></label>
                        <select class="form-select" name="sumberdana" aria-label="Default select example">
                          <option selected disabled></option>
                          <option value="Dana BOS">Dana BOS</option>
                          <option value="Dana Sekolah">Dana Sekolah</option>
                          <option value="Dana Siswa">Dana Siswa</option>
                        </select>
        </div>
                      </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="images" class="form-control" placeholder="image">
            </div>
        </div>
</br>
        <div class="d-flex justify-content-end text-center mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection