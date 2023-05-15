<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TourismAgency || Login</title>
    <!-- animate css code fiel -->
    <link rel="stylesheet" href="../node_modules/animate.css/animate.css" />

    <!-- bootstrap css code file -->
    <link
      rel="stylesheet"
      href="../node_modules/bootstrap/dist/css/bootstrap.min.css"
    />

    <!-- Font Awesome css code file -->
    <link
      rel="stylesheet"
      href="../node_modules/font-awesome/css/font-awesome.css"
    />

    <!-- custom css code file -->
    <link rel="stylesheet" href="../assets/css/custom.css" />
    <link rel="stylesheet" href="../assets/css/login.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg">
      <div class="container justify-content-center">
        <a href="../index.php" class="navbar-logo page-scroll"
          ><img src="../assets/img/logo.png" alt="logo" width="30%"
        /></a>
        <a
          class="navbar-brand text-uppercase page-scroll"
          href="../index.php"
          style="margin-left: -40px"
          >Tourism<span class="text-success">Agency</span></a
        >
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Main -->
    <section>
      <div
        class="row d-flex justify-content-center text-center align-items-center"
      >
        <div class="col-lg-6">
          <div class="container bg-login rounded-3 pb-4">
            <div class="login-form pt-4">
              <div class="login-brand text-center">
                <h2>LOGIN</h2>
              </div>
              <div class="login-section mt-4">
                <form action="" method="post">
                  <label for="username">Username :</label>
                  <input
                    type="text"
                    name="username"
                    id="username"
                    class="mb-4"
                    required
                  />
                  <br />
                  <label for="password">Password :</label>
                  <input
                    type="password"
                    name="password"
                    id="password"
                    class="mb-4"
                    required
                  />
                  <br />
                  <button type="submit" id="submit" class="btn btn-light">
                    LOGIN
                  </button>
                  <a href="register.php" class="btn btn-primary" id="register"
                    >REGISTER</a
                  >
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Main End -->

    <!-- Footer -->
    <div id="footer">
      <div class="container mt-5">
        <div class="row pt-2 d-flex align-items-center" style="height: 30vh">
          <div class="col-lg-6">
            <div class="d-flex align-items-center">
              <a class="footer-logo" href="#home">
                <img src="../assets/img/logo.png" alt="logo" width="30px" />
              </a>
              <a
                href="../index.html"
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
  </body>
</html>
