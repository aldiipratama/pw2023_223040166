<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=1, minimum-scale=1, maximum-scale=1"
    />
    <title>TourismAgency</title>
    <!-- animate css code fiel -->
    <link rel="stylesheet" href="node_modules/animate.css/animate.css" />

    <!-- bootstrap css code file -->
    <link
      rel="stylesheet"
      href="node_modules/bootstrap/dist/css/bootstrap.min.css"
    />

    <!-- Font Awesome css code file -->
    <link
      rel="stylesheet"
      href="node_modules/font-awesome/css/font-awesome.css"
    />

    <!-- custom css code file -->
    <link rel="stylesheet" href="assets/css/custom.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg">
      <div class="container">
        <a href="#home" class="navbar-logo page-scroll"
          ><img src="assets/img/logo.png" alt="logo" width="30%"
        /></a>
        <a
          class="navbar-brand text-uppercase page-scroll"
          href="#home"
          style="margin-left: -40px"
          >Tourism<span class="text-success">Agency</span></a
        >
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
          <ul class="navbar-nav ms-auto me-2 rounded-4 px-3">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#explores">Explores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#solution">Solution</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#testimonial"
                >Testimonial</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#contact">Contact</a>
            </li>
          </ul>
          <a class="btn btn-light rounded-4">login</a>
          <a class="btn btn-primary rounded-4 ms-2">register</a>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header -->
    <div class="container" id="header">
      <div class="row">
        <div class="col-lg-6 align-items-end d-flex">
          <img src="assets/img/bg.png" alt="bg" width="100%" />
        </div>
        <div class="col-lg-6 header-text text-center">
          <h1 class="text-uppercase display-5">
            "Time To<br /><span class="text-success">Travel</span>"
          </h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
            deleniti consequuntur eligendi maxime dolor possimus debitis
            blanditiis doloremque suscipit ipsum dolores inventore nisi dicta
            aut temporibus aspernatur, deserunt fugit tempore?
          </p>
          <a
            class="btn border-success rounded-5 animate__animated animate__bounce animate__repeat-2 animate__delay-1s page-scroll page-scroll"
            href="#about"
            ><ion-icon
              name="arrow-down-outline"
              style="font-size: 20px"
            ></ion-icon
          ></a>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- About -->
    <div class="container" id="about">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6">
          <h1 class="text-uppercase text-center">About Us</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
            quis odit consequatur sit repellendus, amet recusandae molestias
            deserunt hic corrupti quae veniam rerum nesciunt aliquam ducimus
            voluptatum facilis perferendis rem provident, explicabo modi vitae?
            Nihil non voluptatibus itaque! Esse rerum velit quaerat, unde
            cupiditate obcaecati fugiat expedita nulla quisquam rem officia
            alias quidem fugit autem dicta veritatis dolor facilis ipsa
            reiciendis exercitationem culpa nemo aliquam quod numquam. Minus cum
            quasi, quaerat consequatur error quo minima eligendi id similique
            hic ut rerum ea veritatis eveniet molestiae adipisci quas ullam
            saepe distinctio. Non, iure! Unde dolore laboriosam eum enim culpa
            repudiandae beatae!
          </p>
        </div>
        <div class="col-lg-6">
          <img src="assets/img/bg2.png" alt="bg-about" width="100%" />
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Explores -->
    <div class="container" id="explores">
      <div class="row">
        <h1 class="text-center text-uppercase">Explores</h1>
        <div class="col-lg-4">
          <div class="card" style="height: 100%">
            <img
              src="./assets/img/bandung.webp"
              class="card-img-top"
              alt="bandung"
            />
            <div class="card-body">
              <p class="card-text">
                Gedung sate yang terletak di kota Bandung.
              </p>
              <a href="#" class="btn btn-success">Kunjungi</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="height: 100%">
            <img
              src="./assets/img/jakarta.jpg"
              class="card-img-top"
              alt="jakarta"
            />
            <div class="card-body">
              <p class="card-text">Monas yang terletak di kota Jakarta.</p>
              <a href="#" class="btn btn-success">Kunjungi</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="height: 100%">
            <img
              src="./assets/img/malioboro.png"
              class="card-img-top"
              alt="bandung"
            />
            <div class="card-body">
              <p class="card-text">
                Malioboro yang terletak di kota Yogyakarta
              </p>
              <a href="#" class="btn btn-success">Kunjungi</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Explores End -->

    <!-- Solution -->
    <div class="container" id="solution">
      <div class="row d-flex align-items-center text-center">
        <div class="col-lg-6">
          <h1 class="text-uppercase">Solution</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
            doloribus fugiat labore, harum aut, voluptatum qui accusantium
            quibusdam libero iusto optio expedita nemo adipisci quam pariatur.
            Illo beatae optio iure atque. Dolorum, commodi provident explicabo,
            suscipit debitis soluta eligendi, at libero modi ducimus quis magnam
            esse dolores autem eius est!
          </p>
          <a
            class="btn border-success rounded-5 animate__animated animate__bounce animate__repeat-2 animate__delay-1s page-scroll page-scroll"
            href="#testimonial"
            ><ion-icon
              name="arrow-down-outline"
              style="font-size: 20px"
            ></ion-icon
          ></a>
        </div>
        <div class="col-lg-6">
          <img src="assets/img/bg3.png" alt="bg-solution" width="100%" />
        </div>
      </div>
    </div>
    <!-- Solution End -->

    <!-- Testimonial -->
    <div class="container" id="testimonial">
      <h1 class="text-uppercase text-center">Testimonial</h1>
      <div class="row section" style="height: 100vh">
        <div class="col-lg">
          <div
            id="carouselExampleIndicators"
            class="carousel carousel-dark slide"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="single-item rounded-4">
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="profile">
                        <div class="img-area">
                          <img src="assets/img/profil.jpg" alt="img1" />
                        </div>
                      </div>
                      <div class="bio">
                        <h2>Aldi Pratama</h2>
                        <h4>Web Developer</h4>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="comment">
                        <p>
                          <span><i class="fa fa-quote-left"></i></span>Lorem
                          ipsum dolor sit amet consectetur adipisicing elit.
                          Ullam ex aliquid rem ducimus, similique quidem! Neque
                          eius modi voluptate natus dolore placeat temporibus
                          delectus magnam quae, officia perspiciatis voluptates
                          velit.
                        </p>
                        <p class="sosmed">
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a><i class="fa fa-facebook"></i></a>
                          <a><i class="fa fa-instagram"></i></a>
                          <a><i class="fa fa-github"></i></a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="single-item rounded-4">
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="profile">
                        <div class="img-area">
                          <img src="assets/img/profil.jpg" alt="img1" />
                        </div>
                      </div>
                      <div class="bio">
                        <h2>Aldi Pratama</h2>
                        <h4>Web Developer</h4>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="comment">
                        <p>
                          <span><i class="fa fa-quote-left"></i></span>Lorem
                          ipsum dolor sit amet consectetur adipisicing elit.
                          Ullam ex aliquid rem ducimus, similique quidem! Neque
                          eius modi voluptate natus dolore placeat temporibus
                          delectus magnam quae, officia perspiciatis voluptates
                          velit.
                        </p>
                        <p class="sosmed">
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a><i class="fa fa-facebook"></i></a>
                          <a><i class="fa fa-instagram"></i></a>
                          <a><i class="fa fa-github"></i></a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="single-item rounded-4">
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="profile">
                        <div class="img-area">
                          <img src="assets/img/profil.jpg" alt="img1" />
                        </div>
                      </div>
                      <div class="bio">
                        <h2>Aldi Pratama</h2>
                        <h4>Web Developer</h4>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="comment">
                        <p>
                          <span><i class="fa fa-quote-left"></i></span>Lorem
                          ipsum dolor sit amet consectetur adipisicing elit.
                          Ullam ex aliquid rem ducimus, similique quidem! Neque
                          eius modi voluptate natus dolore placeat temporibus
                          delectus magnam quae, officia perspiciatis voluptates
                          velit.
                        </p>
                        <p class="sosmed">
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a><i class="fa fa-facebook"></i></a>
                          <a><i class="fa fa-instagram"></i></a>
                          <a><i class="fa fa-github"></i></a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

    <!-- Contact -->
    <div class="container" id="contact">
      <div class="row=">
        <h1 class="text-uppercase text-center">Contact Us</h1>
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <label for="name">Name : <span class="text-danger">*</span></label
              ><br />
              <input
                type="text"
                name="name"
                id="name"
                style="width: 100%; margin-top: 10px"
                required
                placeholder="Please input your Name!"
              />
              <label for="email" style="margin-top: 10px"
                >Email : <span class="text-danger">*</span></label
              ><br />
              <input
                type="text"
                name="email"
                id="email"
                style="width: 100%; margin-top: 10px"
                required
                placeholder="Please input your Email!"
              />
              <label for="message" style="margin-top: 10px"
                >Message : <span class="text-danger">*</span></label
              >
              <textarea
                type="text"
                name="message"
                id="message"
                style="width: 100%; height: 200px; margin-top: 10px"
                required
                placeholder="Please input your Message!"
              ></textarea>
              <button id="kirim" class="btn btn-success">kirim</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

    <!-- Footer -->
    <div id="footer">
      <div class="container">
        <div class="row pt-2 d-flex align-items-center" style="height: 30vh">
          <div class="col-lg-6">
            <div class="d-flex align-items-center">
              <a class="footer-logo" href="#home">
                <img src="assets/img/logo.png" alt="logo" width="30px" />
              </a>
              <a
                href="#home"
                class="footer-brand text-decoration-none text-uppercase ms-3"
                >Tourism<span class="text-success">Agency</span></a
              >
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut cum
              iure optio laborum provident ducimus consequuntur asperiores
              magnam atque dicta?
            </p>
          </div>
          <div class="col-lg-6">
            <h5>Social Media</h5>
            <ul class="list-unstyled">
              <li>
                <a href="#"><i class="fa fa-github"> Github</i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-instagram ms-2"> Instagram</i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter ms-2"> Twitter</i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-facebook ms-2"> Facebook</i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-12">
            <p>
              <a
                href="mailto:rinaldi.223040166@mail.unpas.ac.id"
                class="text-decoration-none"
                >&copy; paldi0013@gmail.com</a
              >
              || Created 2023
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- jquery javascript code file -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>

    <!-- bootstrap javascript code file -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- IonIcons javascript code file -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>

    <!-- custom javascript code file -->
    <script src="assets/js/script.js"></script>
  </body>
</html>
