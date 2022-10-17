<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "takita";

$conn = mysqli_connect($server, $user, $pass, $database);

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : ". mysqli_connect_error();
}
 ?>