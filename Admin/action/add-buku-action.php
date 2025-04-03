<?php
require '../../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul_buku = $_POST["judul_buku"];
    $tahun_terbit = $_POST["tahun_terbit"];
    $penulis = $_POST["penulis"];
    $penerbit = $_POST["penerbit"];
    $jumlah = $_POST["jumlah"];
    $id_kategori = $_POST["id_kategori"];

    $query_sql = "INSERT INTO tb_buku (judul_buku, tahun_terbit, penulis, penerbit, jumlah, id_kategori) 
                  VALUES ('$judul_buku', '$tahun_terbit', '$penulis', '$penerbit', '$jumlah', '$id_kategori')";

    if (mysqli_query($conn, $query_sql)) {
        header("location: ../index.php"); // Redirect ke halaman daftar buku
        exit();
    } else {
        echo "Pendaftaran buku gagal: " . mysqli_error($conn);
    }
}
?>
