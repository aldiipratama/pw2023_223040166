<!-- header -->
<div id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="header-content">
                    <p class="text-widget text-uppercase ms-4">
                        Follow Us:

                        <a href="https://www.instagram.com/aldxprtm_/"><i
                                class="bi bi-instagram fs-6 ms-3 me-2"></i></a>
                        <a href="https://www.facebook.com/aldii.prtm4"><i class="bi bi-facebook fs-6 me-2"></i></a>
                        <a href="https://twitter.com/paldi07"><i class="bi bi-twitter fs-6 me-2"></i></a>
                        <a href="#"><i class="bi bi-linkedin fs-6 me-2"></i></a>
                        <a href="https://wa.me/+6285798257393" class="text-decoration-none"><i
                                class="bi bi-telephone-fill fs-6 ms-4 me-2"></i>+62 857 9825
                            7393</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 justify-content-end d-flex">
                <div class="col-lg-3">
                    <div class="widget">
                        <?php if (isset($_SESSION['login'])): ?>
                            <?php if ($_SESSION['role'] == 1): ?>
                                <div class="btn-group ms-auto">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false" style="width: 100%;">
                                        <i class=" bi bi-person-circle">Hi,
                                            <?= $_SESSION['username']; ?>
                                        </i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="admin.php">Administrator</a></li>
                                        <li><a class="dropdown-item" href="bookingList.php">Booking List</a></li>
                                        <li><a class="dropdown-item" href="logout.php">logout</a></li>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <?php if ($_SESSION['role'] == 2): ?>
                                <div class="btn-group ms-auto">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false" style="width: 100%;">
                                        <i class=" bi bi-person-circle">Hi,
                                            <?= $_SESSION['username']; ?>
                                        </i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="bookingList.php">Booking List</a></li>
                                        <li><a class="dropdown-item" href="logout.php">logout</a></li>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        <?php else: ?>
                            <a class="text-uppercase text-decoration-none text-white mt-2" href="login.php"">sign in</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=" widget-navbar pt-3">
                            <!-- Navbar -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="container justify-content-between d-flex bg-body rounded-bottom">
                                    <a class="navbar-brand fw-bold ms-4" href="#"><span
                                            class="fs-1">Tourism</span>Agency</a>
                                    <img src="assets/img/giphy.gif" alt="plane"
                                        style="transform: rotateY(180deg) translateX(100px); opacity: 0" width="100px"
                                        class="mt-2" />
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ms-auto">
                                            <li class="nav-item">
                                                <a class="nav-link <?= uriIS(BASE_URL); ?>" href="#about">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?= uriIS(BASE_URL); ?>"
                                                    href="#destinations">Destinations</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?= uriIS(BASE_URL); ?>"
                                                    href="#rating">Testimonials</a>
                                            </li>
                                        </ul>
                                        <form action="" method="post" class="d-flex">
                                            <div class="ms-2 align-items-center d-flex">
                                                <button id="tombol-cari" name="search"
                                                    class="btn btn-secondary rounded-circle"><i
                                                        class="bi bi-search"></i></button>
                                            </div>
                                            <div class="ms-2">
                                                <input type="text" name="keyword" id="keyword"
                                                    class="rounded-4 border border-2 border-secondary" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </nav>
                            <!-- Navbar End -->
                    </div>
                    <!-- header end -->