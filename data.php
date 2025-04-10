<?php
$host = "NAMA_HOST_AZURE_MYSQL";
$user = "USERNAME";
$pass = "PASSWORD";
$db   = "NAMA_DATABASE";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM users");

echo '<!DOCTYPE html>
<html>
<head>
  <title>Data Pengguna</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f2f5;
      padding: 40px;
    }
    .container {
      background: #fff;
      padding: 20px;
      max-width: 600px;
      margin: auto;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    ul {
      list-style: none;
      padding: 0;
    }
    li {
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }
    h2 {
      text-align: center;
    }
    a {
      display: block;
      text-align: center;
      margin-top: 20px;
      color: #007bff;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Data Pengguna</h2>
    <ul>';
while ($row = $result->fetch_assoc()) {
  echo "<li>" . $row['nama'] . " - " . $row['email'] . "</li>";
}
echo '</ul>
    <a href="form.html">Kembali ke Form</a>
  </div>
</body>
</html>';
$conn->close();
?>
