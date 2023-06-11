<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}

require 'functions.php';

$title = "Form Ubah Data";

$conn = koneksi();

if (isset($_POST['ubah'])) {
    if (ubahBook($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah');
                window.location.href = 'destination.php';
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}

$id = $_GET['id'];

$bookingList = query("SELECT * FROM tb_booking WHERE id = $id")[0];

require 'views/ubahBook.view.php';

?>