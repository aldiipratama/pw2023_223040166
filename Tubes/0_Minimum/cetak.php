<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$bookingList = query("SELECT * FROM tb_booking");

$mpdf = new \mPDF();

$html = '<!DOCTYPE html>
        <html lang="en" id="home">
        <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- bootstrap css -->
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
        <!-- bootstrap icon -->
        <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css" />
        <!-- custom css -->
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="assets/css/login.css" />
        <link rel="stylesheet" href="assets/css/admin.css" />
        <title>TourismAgency |'
    . $title .
    '</title>
    </head>
        <body>
        <div class="container-sidebar">
            <div class="main-content">
                <div class="booking" style="overflow-y: scroll;height: 100vh;">
                    <div class="row p-5">
                        <button onclick="history.back()" style="background: none;width: 10px;"><i
                                class="bi bi-arrow-left-circle display-6"></i></button>
                        <div class="title">
                            <h1>Booking List</h1>
                        </div>
                        <div class="content">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Tujuan</th>
                                        <th scope="col">Telpon</th>
                                        <th scope="col">Setting</th>
                                    </tr>
                                </thead>
                                <tbody>' .
    $i = 1;
foreach ($bookingList as $book) {
    $html .= '<tr>
                                        <th scope="row">' .
        $i++
        . '</th>
                                        <td>' .
        $book['firstname'];
    $book['lastname']
        . '</td>
                                        <td>' .
        $book['alamat']
        . '</td>
                                        <td>' .
        $book['tujuan']
        . '</td>
                                        <td>' .
        $book['telepon']
        . '</td>
                                    </tr>';
}
$html .= '</tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bootstrap js -->
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        <!-- custom js -->
        <script src="assets/js/script.js"></script>
    </body>
    </html>';

$mpdf->WriteHTML($html);
$mpdf->Output('bookingList.pdf');

?>