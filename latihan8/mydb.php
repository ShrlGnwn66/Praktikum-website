<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli ($servername, $username, $password);

$sql = "CREATE DATABASE mahasiswa";
if ($conn->query($sql) === TRUE){
    echo "Database berhasil dibuat";
} else {
    echo "Database gagal dibuat";
}
?>