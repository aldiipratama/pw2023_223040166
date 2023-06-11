<?php require 'views/partials/header.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<style>
    nav {
        z-index: 1;
    }

    .main-banner {
        position: relative;
    }

    #bg-video {
        width: 100%;
        height: 100vh;
        object-fit: cover;
    }

    #bg-video::-webkit-media-controls {
        display: none !important;
    }

    .video-overlay {
        position: absolute;
        background-color: rgba(35, 45, 57, 0.5);
        top: 0;
        left: 0;
        bottom: 0;
        width: 100%;
    }

    .main-banner .caption {
        text-align: center;
        position: absolute;
        width: 80%;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .main-banner .caption h6 {
        margin-top: 0px;
        font-size: 18px;
        text-transform: uppercase;
        font-weight: 800;
        color: #fff;
        letter-spacing: 0.5px;
    }

    .main-banner .caption h2 {
        margin-top: 30px;
        margin-bottom: 25px;
        font-size: 84px;
        text-transform: uppercase;
        font-weight: 800;
        color: #fff;
        letter-spacing: 1px;
    }

    .main-banner .caption h2 em {
        font-style: normal;
        color: #00bdbb;
        font-weight: 900;
    }
</style>

<body>
    <nav class="navbar fixed-top">
        <div class="container">
            <a href="index.php" class="btn btn-secondary" onclick="history.back();"><i
                    class="bi bi-arrow-left-circle"></i></a>
        </div>
    </nav>

    <!-- jumbotron -->
    <div class=" main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/img/video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay">
            <div class="caption">
                <h6>Lorem ipsum dolor sit amet</h6>
                <h2><em>Explore</em> the world with us!</h2>
                <div class="down">
                    <a href="#detail" class="btn text-white animate__animated animate__bounce animate__infinite"
                        style="font-size: 3em;"><i class="bi bi-arrow-down-circle"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- jumbotron end -->

    <div class="container" id="detail">
        <?php foreach ($destinations as $dest): ?>
            <div class="row text-center">
                <h1 class="text-dark mb-4">
                    <?= $dest['lokasi']; ?>
                </h1>
                <div class="col-lg-6">
                    <img src="assets/img/uploaded/<?= $dest['gambar']; ?>" alt="<?= $dest['gambar']; ?>" width="600px">
                </div>
                <div class="col-lg-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1247.7006886754536!2d107.59238401543378!3d-6.866242213177498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6be3e8a0c49%3A0x730028bf4627def4!2sUniversitas%20Pasundan!5e0!3m2!1sid!2sid!4v1686431325176!5m2!1sid!2sid"
                        width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="mt-5">Deskripsi</h2>
                    <p>
                        <?= $dest['deskripsi'] ?>
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="mt-5">
                        <?= rupiah($dest['harga']); ?>
                    </h5>
                    <div class="row">
                        <form action="" method="post" class="form mt-5">
                            <input type="hidden" name="id" value="<?= $id; ?>">
                            <input type="hidden" name="tujuan" value="<?= $dest['lokasi']; ?>">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">Firstname</label>
                                        <input type="text" name="firstname" id="firstname" placeholder="Firstname"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="lastname" class="form-label">Lastname</label>
                                        <input type="text" name="lastname" id="lastname" class="form-control"
                                            placeholder="Lastname" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" id="email" placeholder="Input Email"
                                            class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="contact" class="form-label">Contact Number</label>
                                        <input type="tel" pattern="[0-9]{12}" name="contact" id="contact"
                                            placeholder="Input contact" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        placeholder="Address" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="tujuan" class="form-label">Tujuan</label>
                                        <input type="text" name="tujuan" id="tujuan" value="<?= $dest['lokasi']; ?>"
                                            class="form-label" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="text" name="harga" id="harga" value="<?= rupiah($dest['harga']); ?>"
                                            class="form-label" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" name="book" class="btn btn-success">Booking</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>

    <?php require 'views/partials/script.php'; ?>
</body>