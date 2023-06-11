<!DOCTYPE html>
<html lang="en" id="home">
<?php require 'partials/header.php'; ?>

<body>
    <div class="container-sidebar">
        <?php require 'partials/sidebar.php'; ?>
        <div class="main-content">
            <div class="booking" style="overflow-y: scroll;height: 100vh;">
                <div class="row p-5">
                    <div class="title">
                        <h1>Booking List</h1>
                    </div>
                    <div class="content">
                        <table class="table">
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
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Aldi</td>
                                    <td>Bandung</td>
                                    <td>Yogya</td>
                                    <td>08123456789</td>
                                    <td>
                                        <a href="#" class="btn btn-secondary">Edit</a>
                                        <a href="#" class="btn btn-danger m-2">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'partials/script.php' ?>
</body>

</html>