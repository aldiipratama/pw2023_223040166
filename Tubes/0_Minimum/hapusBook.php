<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

if (hapusBook($id) > 0) {
    echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href = 'bookingList.php';
            </script>";
} else {
    echo "<script>
                alert('Data gagal dihapus!');
                window.location.href = 'bookingList.php';
            </script>";
}

?>