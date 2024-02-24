@extends('supplier.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Suppliers</h2>
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
   
<form action="{{ route('supplier.store') }}" method="POST">
    @csrf
  
     <div class="row">
     <div class="col-sm-12 col-sm-12 col-md-13">
            <div class="form-group">
                <strong>ID Supplier</strong>
                <input type="text" name="id_supplier" class="form-control" placeholder="ID Supplier">
            </div>
</br>
        <div class="col-xs-15 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Supplier:</strong>
                <input type="text" name="nama_supplier" class="form-control" placeholder="Nama Supplier">
            </div>
        </div>
</br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Supplier :</strong>
                <textarea class="form-control" style="height:150px" name="alamat_supplier" placeholder="Alamat Supplier"></textarea>
            </div>
        </div>
</br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Telepon</strong>
                <input type="text" name="telp_supplier" class="form-control" placeholder="Nomor Telepon">
            </div>
        </div>
</br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kota Supplier</strong>
                <input type="text" name="kota_supplier" class="form-control" placeholder="Kota Supplier">
            </div>
        </div>
</br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection