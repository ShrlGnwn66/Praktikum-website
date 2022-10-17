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

$sql = "INSERT INTO mhs (nim, nama, email)
VALUES ('E00000000', 'Alex', 'coba@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "Satu data berhasil diinputkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>