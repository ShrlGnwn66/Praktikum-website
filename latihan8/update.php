<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['Nama'];
$nim = $_POST['Nim'];
$prodi = $_POST['Prodi'];

// update data ke database
mysqli_query($koneksi, "update data set Nama='$nama', Nim='$nim', Prodi='$prodi' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>