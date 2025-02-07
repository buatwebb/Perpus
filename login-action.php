<?php

include 'config.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'";
$login = mysqli_query($conn, $query);

$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);
    if ($data['password'] == $password) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['id_pengguna'] = $data['id_pengguna'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['telp'] = $data['telp'];
        $_SESSION['alamat'] = $data['alamat'];
        
        if ($username === 'admin' && $password === 'admin') {
            header("Location: Admin/index.php");
        } else {
            header("Location: User/index.php");
        }
        exit();
    } else {
        $message = "Username atau Password salah!";
        echo "<script>alert('$message');</script>";
        // echo "<script>window.location.href='login.php';</script>";
    }
} else {
    $message = "Username atau Password salah!";
    echo "<script>alert('$message');</script>";
    // echo "<script>window.location.href='login.php';</script>";
    // exit();
}
?>