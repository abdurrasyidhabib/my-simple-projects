<?php
require 'functions.php';
$id = $_GET['id'];
$mhs = query("select * from mhs where id=$id")[0];
if (isset($_POST['submit'])) {
  $data = $_POST;
  if (ubah($data) > 0) {
    echo "
      <script>
        alert('data berhasil diubah');
        document.location.href = 'tampil.php';
      </script>
    ";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <title>form isi data</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-8 m-auto">
        <form action="" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" class="form-control" value="<?= $mhs['nim']; ?>">
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?= $mhs['nama']; ?>">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= $mhs['email']; ?>">
          </div>
          <div class="form-group">
            <label for="tanggal">Tanggal Lahir</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= $mhs['tanggal']; ?>">
          </div>
          <div class="form-group">
            <label for="file_foto">Nama File Foto</label>
            <input type="text" name="file_foto" id="file_foto" class="form-control" value="<?= $mhs['file_foto']; ?>">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Ubah</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>