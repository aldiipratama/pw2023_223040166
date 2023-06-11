<?php

session_start();

require 'functions.php';

$id = $_GET['id'];

$destinations = query("SELECT * FROM destinations WHERE id = $id");

if (isset($_POST['book'])) {

    if (bookingList($_POST) > 0) {
        echo "
        <script>
            alert('Paket telah ditambahkan ke booking list');
            alert('Silahkan Cek booking list');
            window.location.href = 'bookingList.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Paket gagal ditambahkan ke booking list');
            window.location.reload;
        </script>
        ";
    }
}

require 'views/detail.view.php';

?>