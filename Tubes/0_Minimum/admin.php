<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}

require 'functions.php';

$title = "Dashboard";

$destinations = query("SELECT * FROM destinations");

require 'views/dashboard.view.php';

?>