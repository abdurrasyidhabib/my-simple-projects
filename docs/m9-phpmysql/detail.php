<?php
require 'functions.php';
$id = $_GET['id'];
$mhs = query("select * from mhs where id=$id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>detail profil</title>
  <style>
    p {
      margin: 0;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card  col-sm-4 m-auto">
      <div class="card-body">
        <h4 class="card-title">Biodata Naruto</h4>
        <img class="img-thumbnail" src="img/<?= $mhs['file_foto'] ?>" alt="img/<?= $mhs['file_foto'] ?>">
        <p class="card-text">Nama : <?= $mhs['nama'] ?> </p>
        <p class="card-text">NIM : <?= $mhs['nim'] ?> </p>
        <p class="card-text">Email : <?= $mhs['email'] ?> </p>
        <p class="card-text">Tanggal Lahir: <?= $mhs['tanggal'] ?> </p>
      </div>
    </div>
  </div>
  </div>
</body>

</html>