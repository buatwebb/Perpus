<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $no_tlp = $_POST["no_tlp"];
  $alamat = $_POST["alamat"];

    $query_sql = "INSERT INTO tb_user (username, password, no_tlp, alamat, hak_akses)
                    VALUES ('$username', '$password', '$no_tlp', '$alamat', 'user')";

    if (mysqli_query($conn, $query_sql)) {
      header("location: login.php");
    } else {
      echo "Pendaftaran gagal : " . mysqli_error($conn);
    }
  }
?>