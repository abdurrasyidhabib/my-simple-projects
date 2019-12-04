<?php
require 'functions.php';
if (isset($_POST['submit'])) {
  $data = $_POST;
  $data['file_foto'] = $_FILES['file_foto']['name'];
  $data['tmp_name'] = $_FILES['file_foto']['tmp_name'];
  if (tambah($data) > 0) {
    echo "
      <script>
        alert('data berhasil ditambahkan');
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
          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" class="form-control" placeholder="nim" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="nama" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="email" aria-describedby="helpId">
          </div>
          <!-- <div class="form-group">
            <label for="tanggal">Tanggal Lahir</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="tanggal lahir" aria-describedby="helpId">
          </div> -->
          <div class="form-group">
            <label for="file_foto">unggah foto</label>
            <input type="file" class="form-control-file" name="file_foto" id="file_foto" placeholder="upload foto" aria-describedby="fileHelpId">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>