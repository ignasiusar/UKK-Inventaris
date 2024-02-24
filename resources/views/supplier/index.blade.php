@extends('supplier.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-13 margin-tb">
            <div class="pull-left">
                <h2>Data Supplier</h2>
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
            <th>ID Supplier</th>
            <th>Nama Supplier</th>
            <th>Alamat Supplier</th>
            <th>Nomor Telepon</th>
            <th>Lokasi Supplier</th>
            <th width="75px">Action</th>
        </tr>
        @foreach ($supplier as $supplier)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $supplier->id_supplier }}</td>
            <td>{{ $supplier->nama_supplier }}</td>
            <td>{{ $supplier->alamat_supplier }}</td>
            <td>{{ $supplier->telp_supplier }}</td>
            <td>{{ $supplier->kota_supplier }}</td>
            <td>
            <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ route('supplier.edit',$supplier->id) }}"
                                ><i class="bx bx-edit-alt me-2"></i> Edit</a>
</button>

<form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST" id="deleteSupplierForm{{ $supplier->id}}">
    @csrf
    @method('DELETE')
    <button class="dropdown-item" type="button" onclick="confirmDeletion('deleteSupplierForm', {{ $supplier->id }})">
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

                              <!-- <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="dropdown-item" type="submit">
                                    <i class="bx bx-trash me-2"></i> Delete
                                </button>
                            </form> -->
            </td>
        </tr>
        @endforeach
    </table>
@endsection
