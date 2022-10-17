<?php
$conn = new mysqli('localhost','root','', 'kita');

$sql = "CREATE TABLE tugas (
    NIK CHAR (16) primary key,
    Nama VARCHAR(50),
    Jenis_kelamin VARCHAR(30),
    Tanggal_lahir VARCHAR(20),
    Agama VARCHAR(10),
    Tinggi_badan VARCHAR(10),
    hobi VARCHAR(50),
    Telepon CHAR(50),
    Email VARCHAR(20),
    Alamat_lengkap VARCHAR(250),
    Username VARCHAR(20),
    Password VARCHAR(20))";
    

if ($conn->query($sql) === TRUE){
    echo "Tabel berhasil dibuat";
} else {
    echo "Tabel gagal dibuat";
}
?>