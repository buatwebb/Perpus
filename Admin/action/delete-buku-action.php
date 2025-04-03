<?php
require '../../config.php';

$id = $_GET['id'];

$query = "DELETE FROM tb_buku WHERE id = '$id'";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Data buku berhasil dihapus!'); window.location='../index.php';</script>";
} else {
    echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.location='../index.php';</script>";
}

mysqli_close($conn);
?>