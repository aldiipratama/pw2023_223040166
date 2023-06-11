<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}

require 'functions.php';

$title = "Form Edit Data";

$conn = koneksi();

if (isset($_POST['edit'])) {
    if (edit($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah');
                window.location.href = 'destination.php';
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}

$id = $_GET['id'];

$dest = query("SELECT * FROM destinations WHERE id = $id")[0];

require 'views/edit.view.php';

?>