<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
    <h1 class="text-center animate__animated animate__flash animate__infinite">Tambah Data Mahasiswa</h1>

    <div class="row">
        <div class="col-md-6 ms-auto me-auto">
            <form action="" method="post">
                <div class="mb-3 w-25">
                    <label for="nim" class="form-label animate__animated animate__bounce animate__infinite">NIM</label>
                    <input type="text" class="form-control border-primary animate__animated animate__bounceInLeft"
                        name="nim" id="nim" maxlength="9" autofocus required>
                </div>
                <div class="mb-3">
                    <label for="nama"
                        class="form-label animate__animated animate__infinite animate__rubberBand">Nama</label>
                    <input type="text" class="form-control border-primary animate__animated animate__bounceInRight"
                        name="nama" id="nama">
                </div>
                <div class="mb-3">
                    <label for="email"
                        class="form-label animate__animated animate__infinite animate__tada">Email</label>
                    <input type="text" class="form-control border-primary animate__animated animate__bounceInLeft"
                        name="email" id="email">
                </div>
                <div class="mb-3">
                    <label for="jurusan"
                        class="form-label animate__animated animate__infinite animate__swing">Jurusan</label>
                    <input type="text" class="form-control border-primary animate__animated animate__bounceInRight"
                        name="jurusan" id="jurusan">
                </div>
                <div class="mb-3">
                    <label for="gambar"
                        class="form-label animate__animated animate__infinite animate__jello">Gambar</label>
                    <input type="text" class="form-control border-primary animate__animated animate__bounceInLeft"
                        name="gambar" id="gambar">
                </div>
                <button class="btn btn-primary animate__animated animate__rotateInUpLeft" type="submit"
                    name="tambah">Tambah Data</button>
            </form>
        </div>
    </div>

</div>

<?php require('partials/footer.php'); ?>