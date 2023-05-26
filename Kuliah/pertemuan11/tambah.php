<?php

require('functions.php');

$title = 'Form Tambah Data';

// insert data ketika tombol tambah diklik
if (isset($_POST["tambah"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
                alert('data gagal ditambahkan');
                document.location.href = 'index.php';
            </script>";
    }
}

require('views/tambah.view.php');

?>