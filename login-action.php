<?php

include 'config.php';

session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password' ";
$login = mysqli_query($conn, $query);

$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    if ($data['password'] == $password) {

        $_SESSION['hak_akses'] = $data['hak_akses'];

        if ($data['hak_akses'] == 'admin') {
            header("Location: admin/index.php");
        } else if ($data['hak_akses'] == "petugas") {
            header("Location: petugas/index.php");
        } else if ($data['hak_akses'] == 'user') {
            header("Location: user/index.php");
        } else {

            $message = "Username atau Password salah!";
            echo "<script>alert('$message');</>";
            echo "<script>window.location.href='login.php';</script>";
            exit();
        }

    }
} else {

    $message = "Username atau Password salah!";
    echo "<script>alert('$message');</script>";
    echo "<script>window.location.href='login.php';</script>";
    exit();
}
?>