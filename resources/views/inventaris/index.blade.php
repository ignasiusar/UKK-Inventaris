@extends('inventaris.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 mt-3">
            <div class="pull-left">
                <h2>Data Inventaris</h2>
            </div>
        </div>
    </div>
    
  @if (Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: '{{ Session::get('success') }}'
        })
    </script>
@endif
     
    <table class="table table-bordered">
        <tr>
        <th>#</th>
        <th>Barang</th>
        <th>ID Supplier</th>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Kategori Barang</th>
            <th>Jumlah Barang</th>
            <th>Kondisi Barang</th>
            <th>Tanggal Masuk</th>
            <th>Sumber Dana</th>
            <th width="75px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td><img src="{{asset('storage/images/'.$product->images) }}" width="80px"></td>
            <td>{{ $product->id_supplier}}</td>
            <td>{{ $product->kode_barang}}</td>
            <td>{{ $product->nama_barang}}</td>
            <td>{{ $product->kategori_barang}}</td>
            <td>{{ $product->jumlah_barang}}</td>
            <td>{{ $product->kondisi_barang}}</td>
            <td>{{ $product->tgl_msk}}</td>
            <td>{{ $product->sumberdana}}</td>
            <td>
            <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('products.show',$product->id) }}"
                                ><i class="fa fa-eye me-2"></i>Full View</a>

                              <a class="dropdown-item" href="{{ route('products.edit',$product->id) }}"
                                ><i class="bx bx-edit-alt me-2"></i> Edit</a>

                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" id="deleteProductForm{{ $product->id }}">
                        @csrf
                        @method('DELETE')
                        <button class="dropdown-item" type="button" onclick="confirmDeletion('deleteProductForm', {{ $product->id }})">
                            <i class="bx bx-trash me-2"></i> Delete
                        </button>
                    </form>

                    <script>
                    function confirmDeletion(buttonName, index) {
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "Data Tidak Bisa Kembali!",
                            icon: 'warning',
                            color: '#EBF1F5',
                            background: '#1d2333',
                            showCancelButton: true,
                            reverseButtons: true,
                            confirmButtonColor: '#bd1d32',
                            cancelButtonColor: '#1d2333',
                            confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                document.getElementById(buttonName).submit();
                            }
                        });
                    }
                    </script>
            </td>
        </tr>
        @endforeach
    </table>
        
@endsection