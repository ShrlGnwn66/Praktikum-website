<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connection_error);
}

// sql to delete a record
$sql = "DELETE FROM mhs WHERE nama='Elysa'";

if ($conn->query($sql) === TRUE) {
    echo "data berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>