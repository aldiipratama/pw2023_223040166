<?php

session_start();

if (isset($_SESSION['login'])) {
    header("location: admin.php");
    exit;
}

require 'functions.php';

$conn = koneksi();

$title = "Login";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['psw'];

    $q = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");

    if (mysqli_num_rows($q) === 1) {
        $row = mysqli_fetch_assoc($q);
        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['nama'];
            $_SESSION['role'] = $row['role_id'];
            if ($_SESSION['role'] == 1) {
                echo "<script>
                    alert('Anda berhasil login');
                    window.location.href = 'admin.php';
                </script>";
                // header("Location: admin.php");
            }
            if ($_SESSION['role'] == 2) {
                echo "<script>
                    alert('Anda berhasil login');
                    window.location.href = 'index.php';
                </script>";
                // header("Location: index.php");
            }
            if (isset($_POST['remember'])) {
                setcookie('id', $row['id']);
                setcookie('key', hash('sha256', $row['username']));
            }
            // header("Location: admin.php");
            // exit;
        }
    }
    $error = true;
}

require 'views/login.view.php';

?>