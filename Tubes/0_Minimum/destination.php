<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}

require 'functions.php';

$title = "Destinations";

$destinations = query("SELECT * FROM destinations");

if (isset($_POST['cari'])) {
    $destinations = cari($_POST['keyword']);
}

require 'views/destination.view.php';

?>