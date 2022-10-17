<?php
$conn = new mysqli('localhost','root','', 'mahasiswa');

$sql = "CREATE TABLE data (
    id INT(10) primary key AUTO_INCREMENT,
    Nim varchar (10),
    Nama varchar(50),
    Prodi varchar(50))";

if ($conn->query($sql) === TRUE){
    echo "Tabel berhasil dibuat";
} else {
    echo "Tabel gagal dibuat";
}
?>