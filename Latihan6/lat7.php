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

$sql = "UPDATE mhs SET alamat='Pakusari' WHERE nama='Clair'";

if ($conn->query($sql) == TRUE) {
   echo "data berhasil diupdate";
} else {
   echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>