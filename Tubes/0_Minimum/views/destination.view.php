<!DOCTYPE html>
<html lang="en" id="home">
<?php require 'partials/header.php'; ?>

<!-- bootstrap css -->
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
<!-- bootstrap icon -->
<link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css" />

<!-- jquery -->
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $(".cari").hide();
        // event ketika keyword ditulis
        $("#keyword").on("keyup", function () {
            //     // ajax menggunakan load
            //     $("#content").load("ajax/tourism.php?keyword=" + $("#keyword").val());

            $.get(
                "ajax/dest.php?keyword=" + $("#keyword").val(),
                function (data) {
                    $("#content").html(data);
                }
            );
        });
    });
</script>

<body>
    <div class="container-sidebar"">
        <?php require 'partials/sidebar.php'; ?>
        <div class=" main-content">
        <div class="row p-5" style="overflow-y: scroll;height: 100vh;">
            <div class="title">
                <h1>Destination</h1>
                <hr>
            </div>
            <a href="tambah.php" class="btn btn-primary w-25">Tambah Data</a>
            <div class="row">
                <form action="" method="post" class="d-flex">
                    <input type="text" name="keyword" id="keyword" autofocus autocomplete="off"
                        placeholder="Masukan keyword pencarian">
                    <button type="submit" name="cari" class="cari ms-3 w-25">Cari</button>
                </form>
            </div>
            <div id="content">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($destinations as $dest): ?>
                            <tr>
                                <th scope="row">
                                    <?= $i++; ?>
                                </th>

                                <td>
                                    <img src="assets/img/uploaded/<?= $dest['gambar']; ?>" width="200px"
                                        alt="<?= $dest['gambar']; ?>">
                                </td>
                                <td>
                                    <?= $dest['lokasi']; ?>
                                </td>
                                <td>
                                    <?= rupiah($dest['harga']); ?>
                                </td>
                                <td>
                                    <a href="edit.php?id=<?= $dest['id']; ?>" class="btn btn-secondary">Edit</a>
                                    <a href="hapus.php?id=<?= $dest['id']; ?>" class="btn btn-danger m-2">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <?php require 'partials/script.php' ?>
</body>

</html>