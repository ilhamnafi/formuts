<?php
$host = "NAMA_HOST_AZURE_MYSQL";
$user = "USERNAME";
$pass = "PASSWORD";
$db   = "NAMA_DATABASE";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$nama = $_POST['nama'];
$email = $_POST['email'];
$sql = "INSERT INTO users (nama, email) VALUES ('$nama', '$email')";
$conn->query($sql);
$conn->close();

echo "Data berhasil disimpan. <a href='data.php'>Lihat Data</a>";
?>
