<?php

include 'config.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password";
$login  = mysqli_query($connection, $query);

$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);
    if ($data['password'] == $password) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        
        
    }
}

?>