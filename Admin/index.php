<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Perpus</title>
</head>

<body>
    <h1>Halaman Admin Perpus</h1>
    <a href="logout.php">Logout</a>
    <h2>Data Buku</h2>
    <button><a href="form/add-buku.php">Tambah Buku</a></button>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
        <?php
        require '../config.php';
        $query = "
    SELECT tb_buku.*, kategori_buku.nama_kategori
    FROM tb_buku
    JOIN kategori_buku ON tb_buku.id_kategori = kategori_buku.id_kategori";
        $result = mysqli_query($conn, $query);
        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) {
            echo "
        <tr>
            <td>$no</td>
            <td>$data[judul_buku]</td>
            <td>$data[penulis]</td>
            <td>$data[penerbit]</td>
            <td>$data[nama_kategori]</td>
            <td>
                <a href='form/update-buku.php?id=$data[id]'>Update</a> | 
                <a href='action/delete-buku-action.php?id=$data[id]' onclick='return confirm(\"Apakah Anda yakin ingin menghapus buku ini?\")'>Delete</a>
            </td>
        </tr>
    ";
            $no++;
        }
        ?>
    </table>
</body>

</html>