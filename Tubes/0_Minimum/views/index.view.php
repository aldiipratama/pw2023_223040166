<!DOCTYPE html>
<html lang="en" id="home">
<?php require 'partials/header.php' ?>

<style>
    #card {
        height: 12rem;
        overflow: hidden;
        transition: all 1s ease;
        animation: slide;
    }

    #card img {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    #card:hover {
        height: 28rem;
    }

    #card:hover img {
        position: relative;
    }
</style>

<body>
    <?php require 'partials/navbar.php' ?>
    <!-- jumbotron -->
    <div class="jumbotron">
        <div class="row align-items-center h-100">
            <div class="col-lg text-center text-white position-absolute">
                <h1 class="text-uppercase">Embrace The Exploration</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius porro
                    iure quae quos,<br />
                    delectus aliquid reiciendis libero. Eos, eligendi omnis.
                </p>
            </div>
        </div>
    </div>
    <!-- jumbotron end -->

    <!-- about us -->
    <div id="about">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-4 mt-5">
                    <h2><i class="bi bi-calendar-week-fill"></i>Cool Destinations</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta
                        reprehenderit porro quas unde praesentium libero minima ratione
                        aliquid accusamus provident?
                    </p>
                </div>
                <div class="col-lg-4 mt-5">
                    <h2><i class="bi bi-train-freight-front"></i>Adventure Time</h2>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim
                        veniam cumque aperiam rerum optio mollitia molestiae perspiciatis
                        voluptatibus. Libero, corrupti.
                    </p>
                </div>
                <div class="col-lg-4 mt-5">
                    <h2><i class="bi bi-flag"></i>Fast Booking</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit
                        voluptatibus sequi ab. Debitis pariatur totam illo incidunt vel
                        reprehenderit quas.
                    </p>
                </div>
                <div class="col-lg-4 mt-5">
                    <h2><i class="bi bi-egg-fried"></i>Incredible Journey</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit
                        voluptatibus sequi ab. Debitis pariatur totam illo incidunt vel
                        reprehenderit quas.
                    </p>
                </div>
                <div class="col-lg-4 mt-5">
                    <h2><i class="bi bi-gem"></i>Traveling Together</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In nulla
                        praesentium perferendis soluta id eum quibusdam repellendus atque
                        cum excepturi.
                    </p>
                </div>
                <div class="col-lg-4 mt-5">
                    <h2><i class="bi bi-sun"></i>Away We Go Today</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut,
                        minus voluptate magni neque vitae ex consequuntur quod eaque
                        accusamus unde.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- about us end -->

    <!-- parallax -->
    <div class="parallax"></div>
    <!-- parallax end -->

    <!-- destinations -->
    <div id="destinations">
        <form action="" method="post" class="form-cari text-center">
            <input type="text" name="livesearch" id="livesearch" placeholder="Cari Wisata.." class="form-control w-75">
        </form>
        <div id="content">
            <div class="container">
                <div class="row">
                    <?php foreach ($destinations as $dest): ?>
                        <div class="col-lg-4 mt-2">
                            <div class="card" id="card" style="width: 18rem;background-color: var(--bg-color);">
                                <img src="assets/img/uploaded/<?= $dest['gambar']; ?>" class="card-img-top"
                                    alt="<?= $dest['gambar']; ?>" height="200px">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">
                                        <?= $dest['lokasi']; ?>
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <?= rupiah($dest['harga']); ?>
                                    </h6>
                                    <p class="card-text">
                                        <?= substr_replace($dest['deskripsi'], '... <a href="detail.php">Read more</a>', 100); ?>
                                    </p>
                                    <a href="detail.php?id=<?= $dest['id']; ?>" class="btn btn-primary">Open Detail
                                        Location</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <?php if ($halamanAktif > 1): ?>
                                <li class="page-item"><a class="page-link"
                                        href="?halaman=<?= $halamanAktif - 1; ?>#destinations">Previous</a></li>
                            <?php endif; ?>
                            <?php for ($i = 1; $i <= $jumlahHalaman; $i++): ?>
                                <?php if ($i == $halamanAktif): ?>
                                    <li class="page-item page-link bg-primary text-white">
                                        <?= $i; ?>
                                    </li>
                                <?php else: ?>
                                    <li class="page-item page-link">
                                        <?= $i; ?>
                                    </li>
                                <?php endif; ?>
                            <?php endfor; ?>
                            <?php if ($halamanAktif < $jumlahHalaman): ?>
                                <li class="page-item"><a class="page-link"
                                        href="?halaman=<?= $halamanAktif + 1; ?>#destinations">Next</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- destinations end -->

    <!-- rating -->
    <div id="rating">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"
                    data-bs-interval="2000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner align-items-center d-flex">
                        <div class="carousel-item active">
                            <div class="text-center text-white">
                                <h3 class="mb-5 text-uppercase fw-bold">Amazing Tour</h3>
                                <p>
                                    “It is always sad to leave a place to which one knows one
                                    will never return. Such are the melancolies du voyage:
                                    perhaps they are one of the most rewarding things about”
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="w-100 text-center text-white">
                                <h3 class="mb-5 text-uppercase fw-bold">
                                    Great Destinations
                                </h3>
                                <p>
                                    “We leave something of ourselves behind when we leave a
                                    place, we stay there, even though we go away. And there are
                                    things in us that we can find again only by going”
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="w-100 text-center text-white">
                                <h3 class="mb-5 text-uppercase fw-bold">Very Satisfied</h3>
                                <p>
                                    “The overdressed traveler betrays more interest in being
                                    seen than in seeing, while the true traveler knows that the
                                    novel world about her serves as the most appropriate”
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rating end -->

    <div id="sponsor">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-2">
                    <a href="https://getbootstrap.com/">
                        <img src="assets/img/bootstrap.svg" alt="bootstrap" width="100px" />
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://www.w3schools.com/html/">
                        <img src="assets/img/html5.svg" alt="html" width="100px" />
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://www.w3schools.com/css/">
                        <img src="assets/img/css3-alt.svg" alt="css" width="100px" />
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://www.javascript.com/">
                        <img src="assets/img/square-js.svg" alt="js" width="100px" />
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://sass-lang.com/">
                        <img src="assets/img/sass.svg" alt="sass" width="100px" />
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div id="footer" class="bg-dark">
        <div class="row">
            <div class="col-lg">
                <p class="text-center text-white mt-2">
                    &copy; 2023 TourismAgency, All Rights Reversed
                </p>
            </div>
        </div>
    </div>
    <!-- footer end -->

    <!-- up -->
    <a href="#home" class="btn fs-4 scrollTop bg-light rounded-circle"><i class="bi bi-arrow-up-circle"></i></a>

    <?php require 'partials/script.php' ?>
</body>

</html>