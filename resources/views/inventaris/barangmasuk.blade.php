<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <title>Form Barang Masuk</title>
</head>
<body>
  <div class="container">
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="id_masuk_barang">ID Masuk Barang</label>
          <input type="text" class="form-control" id="id_masuk_barang" name="id_masuk_barang">
        </div>
        <div class="form-group col-md-6">
          <label for="kode_barang">Kode Barang</label>
          <input type="text" class="form-control" id="kode_barang" name="kode_barang">
        </div>
      </div>
      <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="tanggal_masuk">Tanggal Masuk</label>
          <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk">
        </div>
        <div class="form-group col-md-6">
          <label for="jumlah_masuk">Jumlah Masuk</label>
          <input type="number" class="form-control" id="jumlah_masuk" name="jumlah_masuk">
        </div>
      </div>
      <div class="form-group">
        <label for="kode_supplier">Kode Supplier</label>
        <input type="text" class="form-control" id="kode_supplier" name="kode_supplier">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>