<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basis_data";

// Buat Koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
// Periksa Koneksi
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
    echo "Koneksi berhasil";
}

//insert data
$sql = "INSERT INTO obat (nama)
VALUES ('Budi Santosa')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
