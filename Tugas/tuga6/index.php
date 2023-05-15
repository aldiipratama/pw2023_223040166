<?php

// Koneksi database
require("functions.php");

// Mengambil data dari database
$mhs = query("SELECT * FROM mahasiswa");

// mencari data mahasiswa
if (isset($_POST['cari'])) {
    $mhs = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1>Daftar mahasiswa</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <form action="" method="post">
        <input type="text" name="keyword" placeholder="Masukkan keyword pencarian.." autofocus autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <table border="1" cellPadding="10" cellSpacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mhs as $row): ?>
            <tr>
                <td>
                    <?= $i; ?>
                </td>
                <td><a href="ubah.php?id=<?= $row['id']; ?>">Ubah</a> || <a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a>
                </td>
                <td>
                    <?= $row["nrp"]; ?>
                </td>
                <td>
                    <?= $row["nama"]; ?>
                </td>
                <td>
                    <?= $row["email"]; ?>
                </td>
                <td>
                    <?= $row["jurusan"]; ?>
                </td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>

</html>