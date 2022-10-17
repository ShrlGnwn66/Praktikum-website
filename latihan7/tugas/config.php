<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "kita";
$conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");

$nik = $_REQUEST['nik'];
$nama = $_REQUEST['nama'];
$jenis_kelamin = $_REQUEST['jenis_kelamin'];
$tanggal_lahir = $_REQUEST['tgl_lahir'];
$agama = $_REQUEST['agama'];
$tinggi_badan = $_REQUEST['tinggi_badan'];
$hobi = implode(',', $_POST['hobi']);
$telepon = $_REQUEST['telepon'];
$email = $_REQUEST['email'];
$alamat_lengkap = $_REQUEST['alamat_lengkap'];
$username = $_REQUEST['username'];
$pass = $_REQUEST['pass'];

$sql = "INSERT INTO tugas (nik, nama, jenis_kelamin, tanggal_lahir, agama, tinggi_badan, hobi, telepon, email, alamat_lengkap, username, password) 
VALUES ('$nik','$nama', '$jenis_kelamin', '$tanggal_lahir', '$agama', '$tinggi_badan', '$hobi', '$telepon', '$email', '$alamat_lengkap', '$username', '$pass')";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Input berhasil";
} else {
    echo "Input gagal";
}

mysqli_close($conn);