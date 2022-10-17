<?php
$conn = new mysqli('localhost','root','');

$sql = "CREATE DATABASE tugas2";
if ($conn->query($sql) === TRUE){
    echo "Database berhasil dibuat";
} else {
    echo "Database gagal dibuat";
}
?>