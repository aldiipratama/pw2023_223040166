<?php

session_start();

require 'functions.php';

$title = 'Home';

$jumlahDataPerhalaman = 6;
$jumlahData = count(query("SELECT * FROM destinations"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = (isset($_GET['halaman']) ? $_GET['halaman'] : 1);
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

$destinations = query("SELECT * FROM destinations LIMIT $awalData, $jumlahDataPerhalaman");

if (isset($_POST['search'])) {
    $destinations = cari($_POST['keyword']);
}

require 'views/index.view.php';

?>