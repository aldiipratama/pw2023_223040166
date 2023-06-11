<!DOCTYPE html>
<html>
<?php require 'partials/header.php' ?>

<body>
    <div class="container">
        <div class="col-lg-1">
            <button type="submit" onclick="history.back()" class="btn btn-secondary"><i
                    class="bi bi-arrow-left-circle"></i></button>
        </div>
        <h2>Form Edit Data</h2>
        <form method="POST" action="" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $bookingList['id']; ?>">
            <div class="mb-3">
                <label for="firstname" class="form-label">Firstname:</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required
                    value="<?= $bookingList['firstname']; ?>">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Lastname:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required
                    value="<?= $bookingList['lastname']; ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required
                    value="<?= $bookingList['alamat']; ?>">
            </div>
            <div class="mb-3">
                <label for="tujuan" class="form-label">Tujuan:</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" required
                    value="<?= $bookingList['tujuan']; ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label">Telepon:</label>
                <input type="text" class="form-control" id="telepon" name="telepon" required
                    value="<?= $bookingList['telepon']; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="ubah" id="ubah">Ubah Data</button>
        </form>
    </div>

    <?php require 'partials/script.php' ?>
</body>

</html>