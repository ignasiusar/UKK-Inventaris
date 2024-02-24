@extends('pinjams.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.create') }}"> Tambah Peminjam</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pinjams as $pinjam)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pinjam->nama_barang }}</td>
            <td>{{ $pinjam->kode_barang }}</td>
            <td>
                <form action="{{ route('pinjams.destroy',$pinjam->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('pinjams.show',$pinjam->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pinjams.edit',$pinjam->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
   
      
@endsection