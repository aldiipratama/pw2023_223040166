<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}

require 'functions.php';

$title = "Form Tambah Data Destination";

$conn = koneksi();

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                window.location.href = 'destination.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan');
                window.location.href = 'destination.php';
            </script>";
    }
}

require 'views/tambah.view.php';

?>