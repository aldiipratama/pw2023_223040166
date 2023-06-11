<?php

require 'functions.php';

$title = "Register";

if (isset($_POST['register'])) {
    if (register($_POST) > 0) {
        echo "<script>
                alert('Anda Berhasil Mendaftar');
                alert('Silahkan login!');
                window.location.href = 'login.php';
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}

require 'views/registrasi.view.php';

?>