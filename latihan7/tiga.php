<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "form";
$conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");

$name = $_REQUEST['nama'];
$alamat = $_REQUEST['alamat'];
$telp = $_REQUEST['telp'];

$sql = "INSERT INTO misi (nama, alamat, telepon) VALUES ('$name', '$alamat', '$telp')";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Input berhasil";
} else {
    echo "Input gagal";
}

mysqli_close($conn);