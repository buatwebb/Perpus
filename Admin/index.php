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
    <table border="1">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Jenis</th>
            <th>Aksi</th>
        </tr>
        <?php
        require '/config.php';
        $query = "SELECT * FROM tb_buku";
        $result = mysqli_query($conn, $query);
        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) {}
       ?>
</body>
</html>