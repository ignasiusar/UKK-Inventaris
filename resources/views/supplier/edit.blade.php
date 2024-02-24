@extends('supplier.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data Supplier</h2>
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
  
    <form action="{{ route('supplier.update',$supplier->id) }}" method="POST">
        @csrf
        @method('PUT')
   
     <div class="form-group row mb-4">
            <label class="col-sm-2 col-form-label mb-3"><strong>ID Supplier</strong></label>
            <div class="col-sm-4">
                <input type="text" name="id_supplier" value="{{ $supplier->id_supplier }}" class="form-control" placeholder="ID Supplier">
            </div>

        <div class="form-group row mb-3">
            <label class="col-sm-2 col-form-label mx-1"><strong>Nama Supplier:</strong></label>
            <div class="col-sm-4">
                <input type="text" name="nama_supplier"  value="{{ $supplier->nama_supplier }}" class="form-control" placeholder="Nama Supplier">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-sm-2 col-form-label mx-1"><strong>Alamat Supplier :</strong></label>
            <div class="col-sm-4">
                <textarea class="form-control" style="height:150px" name="alamat_supplier" placeholder="Alamat Supplier">{{ $supplier->alamat_supplier }}</textarea>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-sm-2 col-form-label mx-1"><strong>Nomor Telepon</strong></label>
            <div class="col-sm-4">
                <input type="text" name="telp_supplier"  value="{{ $supplier->telp_supplier }}" class="form-control" placeholder="Nomor Telepon">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-sm-2 col-form-label mx-1"><strong>Kota Supplier</strong></label>
            <div class="col-sm-4">
                <input type="text" name="kota_supplier"  value="{{ $supplier->kota_supplier }}" class="form-control" placeholder="Kota Supplier">
            </div>
        </div>
 </form>
 <div class="row">
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-secondary mx-2">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
@endsection