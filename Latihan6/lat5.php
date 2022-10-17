<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connection_error);
}

$sql = "INSERT INTO mhs (nim, nama, alamat, email)
VALUES ('E00000002', 'Clair', 'Jenggaawah', 'clair@example.com'),
        ('E300000003', 'Dwayne', 'Wuluhan', 'dwayne@example.com'),
        ('E300000004', 'Elysa', 'Ajung', 'elysa@example.com')";

if ($conn->multi_query($sql) === TRUE) {
    echo "beberapa data berhasil diinputkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
