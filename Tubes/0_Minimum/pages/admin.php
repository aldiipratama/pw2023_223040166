<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TourismAgency || Admin!</title>
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
  </head>
  <body>
    <!-- Sidebar -->
    <div class="row">
      <div
        class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark col-lg-4"
        style="width: 25vw; height: 100vh"
      >
        <a
          href="#dashboard"
          class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-white text-decoration-none"
        >
          <ion-icon
            name="extension-puzzle-outline"
            class="ms-4"
            style="font-size: 2em"
          ></ion-icon>
          <span class="fs-4 ms-2">Administrator</span>
        </a>
        <hr />
        <ul class="nav nav-pills flex-column mb-auto">
          <li>
            <a
              href="#dashboard"
              class="nav-link text-white"
              id="dashboard-list"
              data-bs-toggle="list"
              role="tab"
              aria-controls="list-dashboard"
            >
              <ion-icon name="albums-outline"></ion-icon>
              Dashboard
            </a>
          </li>
          <li>
            <a
              href="#profil"
              class="nav-link text-white"
              id="profil-list"
              data-bs-toggle="list"
              role="tab"
              aria-controls="list-profil"
            >
              <ion-icon name="person-circle-outline"></ion-icon>
              Profil
            </a>
          </li>
          <li>
            <a
              href="#settings"
              class="nav-link text-white"
              id="settings-list"
              data-bs-toggle="list"
              role="tab"
              aria-controls="list-settings"
            >
              <ion-icon name="cog-outline"></ion-icon>
              Settings
            </a>
          </li>
          <li>
            <a
              href="#users"
              class="nav-link text-white"
              id="users-list"
              data-bs-toggle="list"
              role="tab"
              aria-controls="list-users"
            >
              <ion-icon name="accessibility-outline"></ion-icon>
              Users
            </a>
          </li>
          <li>
            <a href="../index.php" class="nav-link text-white"
              ><ion-icon name="close-circle-outline"></ion-icon> LogOut</a
            >
          </li>
        </ul>
      </div>
      <!-- Sidebar End -->

      <div class="col-sm-4">
        <!-- Dashboard -->
        <div class="collapse in" id="dashboard" role="tabpanel">
          <h2>Hello Admin!</h2>
        </div>
        <!-- Dashboard End -->

        <!-- Profil -->
        <div class="collapse" id="profil" role="tabpanel">
          <h2>Profil</h2>
          <p>Username: aldiipratama</p>
          <p>Email Address : paldi0013@gmail.com</p>
          <p>Name : Muhamad Rinaldi Agus Pratama</p>
          <p>Gender : Male</p>
          <p>Age : 20</p>
        </div>
        <!-- Profil End -->

        <!-- Settings -->
        <div class="collapse" id="settings" role="tabpanel">
          <h2>Settings</h2>
        </div>
        <!-- Settings End -->

        <!-- Users -->
        <div class="collapse" id="users" role="tabpanel">
          <h2>Users</h2>
        </div>
        <!-- Users End -->
      </div>
      <div class="col-sm-8">
        <div class="tab-content" id="nav-tabContent">
          <div
            class="tab-pane fade show active"
            id="list-dashboard"
            role="tabpanel"
            aria-labelledby="dashboard-list"
          ></div>
          <div
            class="tab-pane fade"
            id="list-profil"
            role="tabpanel"
            aria-labelledby="profil-list"
          ></div>
          <div
            class="tab-pane fade"
            id="list-settings"
            role="tabpanel"
            aria-labelledby="settings-list"
          ></div>
          <div
            class="tab-pane fade"
            id="list-users"
            role="tabpanel"
            aria-labelledby="users-list"
          ></div>
        </div>
      </div>
    </div>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- IonIcons -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
