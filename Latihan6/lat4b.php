<?php
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO mhs (nim, nama, alamat, email)
VALUES ('E00000001', 'Brian', 'Ambulu', 'brian@example.com')";

if ($conn->query($sql) === TRUE) {
   echo "Satu data berhasil diinputkan";
} else {
   echo "Error; " . $ql . "<br>" . $conn->error;
}

$conn->close();
?>