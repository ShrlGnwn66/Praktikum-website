<?php
$conn = new mysqli('localhost','root','', 'form');

$sql = "CREATE TABLE misi (
    Nama varchar(50),
    alamat varchar(50),
    telepon CHAR(50))";

if ($conn->query($sql) === TRUE){
    echo "Tabel berhasil dibuat";
} else {
    echo "Tabel gagal dibuat";
}
?>