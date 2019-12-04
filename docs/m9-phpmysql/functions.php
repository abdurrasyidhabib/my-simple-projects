<?php
//koneksi ke database: error -> ada error messege nya. 
$conn = mysqli_connect('localhost', 'root', '', 'mahasiswa_pweb');

// mengambil data (fetch) dari object $result
// mysqli_fetch_row() hasilnya array numerik
// mysqli_fetch_assoc() hasilnya array assosiatif
// mysqli_fetch_array() hasilnya array numerik dan assosiatif
// mysqli_fetch_object() hasilnya berupa object(stdClass)

// while ($mhs = mysqli_fetch_assoc($result))
// selama masih ada recordnya
function query($sqlQuery)
{
  global $conn;
  // ambil data dari tabel mahasiswa pada database mahasiswa pweb
  $result = mysqli_query($conn, $sqlQuery);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;
  $nama = $data['nama'];
  $nim = $data['nim'];
  $email = $data['email'];
  $tanggal = date('d-m-Y');
  // var_dump($tanggal);
  // die();
  $file_foto = $data['file_foto'];
  $tmp_name = $data['tmp_name'];
  $dest = "img/";

  move_uploaded_file($tmp_name, $dest . $file_foto);
  $sqlQuery = "INSERT INTO mhs VALUES(
    '',
    '$nim',
    '$nama',
    '$email',
    '$tanggal',
    '$file_foto'
  )";
  mysqli_query($conn, $sqlQuery);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  global $conn;
  $sqlQuery = "DELETE FROM mhs WHERE id=$id";
  mysqli_query($conn, $sqlQuery);
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  global $conn;
  $nama = $data['nama'];
  $nim = $data['nim'];
  $email = $data['email'];
  $tanggal = $data['tanggal'];
  $file_foto = $data['file_foto'];
  $id = $data['id'];

  $query = "update mhs set 
    nim='$nim',
		nama = '$nama',
		email = '$email',
		tanggal = '$tanggal',
    file_foto = '$file_foto'
    where id=$id;
  ";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
