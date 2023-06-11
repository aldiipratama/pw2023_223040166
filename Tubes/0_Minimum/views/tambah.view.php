<!DOCTYPE html>
<html>
<?php require 'partials/header.php' ?>

<body>
    <div class="container">
        <div class="col-lg-1">
            <button type="submit" onclick="history.back()" class="btn btn-secondary"><i
                    class="bi bi-arrow-left-circle"></i></button>
        </div>
        <h2>Form Tambah Data</h2>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar:</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi:</label>
                <input type="lokasi" class="form-control" id="lokasi" name="lokasi" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">harga:</label>
                <input type="text" class="form-control" id="harga" name="harga" required placeholder="Rp.">
            </div>
            <button type="submit" class="btn btn-primary" name="tambah">Tambah Data</button>
        </form>
    </div>
    <?php require 'partials/script.php'; ?>
</body>

</html>