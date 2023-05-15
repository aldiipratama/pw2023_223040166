<?php

require 'functions.php';

if (isset($_POST['submit'])) {
    if (ubah($_POST) > 0) {
        echo '<script>alert("data berhasil diubah");document.location.href = "index.php";</script>';
    } else {
        echo '<script>alert("data gagal diubah");document.location.href = "index.php";</script>';
    }
}

$id = $_GET['id'];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>

<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
            <li>
                <label for="nrp">nrp :</label>
                <input type="text" name="nrp" id="nrp" value="<?= $mhs['nrp']; ?>">
            </li>
            <li>
                <label for="nama">nama :</label>
                <input type="text" name="nama" id="nama" value="<?= $mhs['nama']; ?>">
            </li>
            <li>
                <label for="email">email :</label>
                <input type="text" name="email" id="email" value="<?= $mhs['email']; ?>">
            </li>
            <li>
                <label for="jurusan">jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs['jurusan']; ?>">
            </li>
        </ul>
        <button type="submit" name="submit">Ubah Data</button>
    </form>
</body>

</html>