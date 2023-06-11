<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}

require 'functions.php';

$title = "Booking list";

$destinations = query("SELECT * FROM destinations");
$bookingList = query("SELECT * FROM tb_booking");

require 'views/bookingList.view.php';

?>