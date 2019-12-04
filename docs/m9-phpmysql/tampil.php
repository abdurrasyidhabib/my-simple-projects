<?php
require 'functions.php';
$mahasiswa = query("select * from mhs");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>form isi data</title>
</head>

<body>
  <div class="container">
    <h3 class="text-center mb-4">DATA MAHASISWA PEMROGRAMAN WEB 2019</h3>
    <a name="" id="" class="btn btn-primary" href="tambah.php" role="button">tambah data</a>
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Tanggal Lahir</th>
          <th>Foto</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($mahasiswa as $mhs) :

          ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $mhs['nim'] ?></td>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['email'] ?></td>
            <td><?= $mhs['tanggal'] ?></td>
            <td><img src="img/<?= $mhs['file_foto'] ?>" alt="img/<?= $mhs['file_foto'] ?>" height="50px"></td>
            <td>
              <span class="badge badge-primary"><a href="detail.php?id=<?= $mhs['id'] ?>">detail</a></span>
              <span class="badge badge-warning"><a href="ubah.php?id=<?= $mhs['id']; ?>">ubah</a></span>
              <span class="badge badge-danger"><a href="hapus.php?id=<?= $mhs['id']; ?>">hapus</a></span>
            </td>
          </tr>
        <?php $no++;
        endforeach; ?>
      </tbody>
    </table>
  </div>
</body>

</html>