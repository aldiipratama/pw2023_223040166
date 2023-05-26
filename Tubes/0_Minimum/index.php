<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- bootstrap css -->
    <link
      rel="stylesheet"
      href="./node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <!-- bootstrap icon -->
    <link
      rel="stylesheet"
      href="./node_modules/bootstrap-icons/font/bootstrap-icons.css"
    />

    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>TourismAgency</title>
  </head>
  <body>
    <!-- header -->
    <div id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mt-2">
            <div class="header-content">
              <p class="text-widget text-uppercase ms-4">
                Follow Us:

                <a href="#"><i class="bi bi-instagram fs-6 ms-3 me-2"></i></a>
                <a href="#"><i class="bi bi-facebook fs-6 me-2"></i></a>
                <a href="#"><i class="bi bi-twitter fs-6 me-2"></i></a>
                <a href="#"><i class="bi bi-linkedin fs-6 me-2"></i></a>
                <i class="bi bi-telephone-fill fs-6 ms-4 me-2"></i>+62123456789
              </p>
            </div>
          </div>
          <div class="col-lg-6 mt-2 text-end">
            <a href="#" class="text-uppercase text-decoration-none text-white"
              >sign in</a
            >
          </div>
        </div>
      </div>
    </div>
    <div class="widget-navbar">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg">
        <div class="container justify-content-between d-flex bg-body">
          <a class="navbar-brand fw-bold ms-4" href="#"
            ><span class="fs-1">Tourism</span>Agency</a
          >
          <img
            src="./assets/img/giphy.gif"
            alt="plane"
            style="transform: rotateY(180deg) translateX(100px); opacity: 0"
            width="100px"
            class="mt-2"
          />
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#destinations">Destinations</a>
              </li>
            </ul>
            <form action="">
              <div class="ms-2 field">
                <label for="search"><i class="bi bi-search"></i></label>
                <input
                  type="text"
                  name="search"
                  id="search"
                  class="rounded-4 border border-2 border-secondary"
                />
              </div>
            </form>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->
    </div>
    <!-- header end -->

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
    <div id="destinations" style="height: 100vh">
      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-3 mt-2">
            <div
              class="rounded-0 img"
              style="
                width: 15rem;
                height: 15rem;
                background-image: url(./assets/img/img.jpg);
                background-size: cover;
              "
            >
              <div class="shadowbox">
                <h3 class="judul text-white">London</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-2">
            <div
              class="rounded-0 img"
              style="
                width: 15rem;
                height: 15rem;
                background-image: url(./assets/img/img.jpg);
                background-size: cover;
              "
            >
              <div class="shadowbox">
                <h3 class="judul text-white">London</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-2">
            <div
              class="rounded-0 img"
              style="
                width: 15rem;
                height: 15rem;
                background-image: url(./assets/img/img.jpg);
                background-size: cover;
              "
            >
              <div class="shadowbox">
                <h3 class="judul text-white">London</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-2">
            <div
              class="rounded-0 img"
              style="
                width: 15rem;
                height: 15rem;
                background-image: url(./assets/img/img.jpg);
                background-size: cover;
              "
            >
              <div class="shadowbox">
                <h3 class="judul text-white">London</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-2">
            <div
              class="rounded-0 img"
              style="
                width: 15rem;
                height: 15rem;
                background-image: url(./assets/img/img.jpg);
                background-size: cover;
              "
            >
              <div class="shadowbox">
                <h3 class="judul text-white">London</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-2">
            <div
              class="rounded-0 img"
              style="
                width: 15rem;
                height: 15rem;
                background-image: url(./assets/img/img.jpg);
                background-size: cover;
              "
            >
              <div class="shadowbox">
                <h3 class="judul text-white">London</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-2">
            <div
              class="rounded-0 img"
              style="
                width: 15rem;
                height: 15rem;
                background-image: url(./assets/img/img.jpg);
                background-size: cover;
              "
            >
              <div class="shadowbox">
                <h3 class="judul text-white">London</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-2">
            <div
              class="rounded-0 img"
              style="
                width: 15rem;
                height: 15rem;
                background-image: url(./assets/img/img.jpg);
                background-size: cover;
              "
            >
              <div class="shadowbox">
                <h3 class="judul text-white">London</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- destinations end -->

    <!-- rating -->
    <div id="rating">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div
            id="carouselExampleSlidesOnly"
            class="carousel slide"
            data-bs-ride="carousel"
            data-bs-interval="2000"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleSlidesOnly"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleSlidesOnly"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleSlidesOnly"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
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
            <img
              src="./assets/img/bootstrap.svg"
              alt="bootstrap"
              width="100px"
            />
          </div>
          <div class="col-lg-2">
            <img src="./assets/img/html5.svg" alt="html" width="100px" />
          </div>
          <div class="col-lg-2">
            <img src="./assets/img/css3-alt.svg" alt="css" width="100px" />
          </div>
          <div class="col-lg-2">
            <img src="./assets/img/square-js.svg" alt="js" width="100px" />
          </div>
          <div class="col-lg-2">
            <img src="./assets/img/sass.svg" alt="sass" width="100px" />
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
    <a href="#home" class="btn fs-4 scrollTop bg-light rounded-circle"
      ><i class="bi bi-arrow-up-circle"></i
    ></a>

    <!-- bootstrap js -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jquery -->
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>

    <!-- custom js -->
    <script src="./assets/js/script.js"></script>
  </body>
</html>
