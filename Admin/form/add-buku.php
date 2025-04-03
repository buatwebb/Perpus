<h1>Tambah Buku</h1>
<form action="../action/add-buku-action.php" method="post">
    <label for="judul_buku">Judul Buku</label>
    <input type="text" name="judul_buku" id="judul_buku" required>
    <br>

    <label for="tahun_terbit">Tahun Terbit</label>
    <input type="date" name="tahun_terbit" id="tahun_terbit" required>
    <br>

    <label for="penulis">Penulis</label>
    <input type="text" name="penulis" id="penulis" required>
    <br>

    <label for="penerbit">Penerbit</label>
    <input type="text" name="penerbit" id="penerbit" required>
    <br>

    <label for="jumlah">Jumlah</label>
    <input type="number" name="jumlah" id="jumlah" required>
    <br>

    <label for="id_kategori">Kategori</label>
    <select name="id_kategori" id="id_kategori" required>
        <option value="">-- Pilih Kategori --</option>
        <?php
        require_once "../../config.php";
        $query_kategori = "SELECT id_kategori, nama_kategori FROM kategori_buku ORDER BY nama_kategori ASC";
        $result_kategori = mysqli_query($conn, $query_kategori);

        if ($result_kategori) {
            while ($kategori = mysqli_fetch_assoc($result_kategori)) {
                echo "<option value='" . $kategori['id_kategori'] . "'>" . $kategori['nama_kategori'] . "</option>";
            }
        } else {
            echo "<option value=''>Kategori Tidak Ditemukan</option>";
        }
        ?>
    </select>
    <br><br>

    <button type="submit">Simpan</button>
</form>