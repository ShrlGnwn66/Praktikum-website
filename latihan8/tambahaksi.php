<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nim = $_POST['Nim'];
$nama = $_POST['Nama'];
$prodi = $_POST['Prodi'];

// menginput data ke database
mysqli_query($koneksi,"insert into data values('','$nim','$nama','$prodi')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>