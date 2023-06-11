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
            <input type="hidden" name="id" value="<?= $dest['id']; ?>">
            <input type="hidden" name="gambarOld" value="<?= $dest['gambar']; ?>">
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar:</label>
                <img src="assets/img/uploaded/<?= $dest['gambar']; ?>" alt="<?= $dest['gambar']; ?>" width="200px">
                <input type="file" class="form-control w-25 mt-3" id="gambar" name="gambar">
            </div>
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi:</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" required
                    value="<?= $dest['lokasi']; ?>">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">harga:</label>
                <input type="text" class="form-control" id="harga" name="harga" required value="<?= $dest['harga']; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="edit" id="edit">Ubah Data</button>
        </form>
    </div>

    <?php require 'partials/script.php' ?>
</body>

</html>