<!DOCTYPE html>
<html lang="en" id="home">
<?php require 'partials/header.php'; ?>

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
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($bookingList as $book): ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $i++; ?>
                                        </th>
                                        <td>
                                            <?= $book['firstname']; ?>
                                            <?= $book['lastname']; ?>
                                        </td>
                                        <td>
                                            <?= $book['alamat']; ?>
                                        </td>
                                        <td>
                                            <?= $book['tujuan']; ?>
                                        </td>
                                        <td>
                                            <?= $book['telepon']; ?>
                                        </td>
                                        <td>
                                            <a href="ubahBook.php?id=<?= $book['id']; ?>"
                                                class="btn btn-secondary m-2">Edit</a>
                                            <a href="hapusBook.php?id=<?= $book['id']; ?>"
                                                class="btn btn-danger m-2">Hapus</a>
                                            <a href="cetak.php" class="btn btn-success m-2">Cetak</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
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