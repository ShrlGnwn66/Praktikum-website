<?php
$conn = new mysqli('localhost','root','', 'tugas2');

$sql = "CREATE TABLE siswa (
    NISN int primary key auto_increment,
    Nama varchar(50),
    Tanggal_lahir varchar(50),
    alamat varchar(50),
    Jenis_kelamin varchar(50))";

if ($conn->query($sql) === TRUE){
    echo "Tabel berhasil dibuat";
} else {
    echo "Tabel gagal dibuat";
}
?>