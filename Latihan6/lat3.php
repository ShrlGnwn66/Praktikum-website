<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE mhs (
    nim VARCHAR(9),
    nama VARCHAR(30),
    alamat VARCHAR(30),
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
    echo "Table MyGuest created successfully";
} else {
    echo "Error creating table : " . mysqli_error($conn);
}

mysqli_close($conn);
?>