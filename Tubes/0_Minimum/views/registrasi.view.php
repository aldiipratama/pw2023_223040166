<!DOCTYPE html>
<html lang="en">
<?php require 'partials/header.php'; ?>

<body>
    <div class="container">
        <div class="row justify-content-center mt-2">
            <div class="col-lg-5">
                <div class="back">
                    <button onclick="history.back()" class="position-absolute top-0 mt-2"
                        style="width: 10px; background:none;"><i class="bi bi-arrow-left-circle"></i></button>
                </div>
                <div class="form-register mt-2 px-5 py-3 shadow-lg">
                    <h4 class="text-center">Daftar dulu, yuk</h4>
                    <form action="" method="post">
                        <div class="my-3">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username"
                                required>
                            <label class="form-label fs-6 text-secondary">Tidak diperkenankan menggunakan spasi</label>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                required>
                            <label class="form-label fs-6 text-secondary">Contoh: Example@gmail.com</label>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <input type="password" name="psw" id="password" class="form-control" placeholder="Password"
                                required>
                            <i class="bi bi-eye ms-2 fs-3" style="cursor: pointer;" id="eye"></i>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <input type="password" name="psw-repeat" id="password2" class="form-control"
                                placeholder="Password repeat" required>
                            <i class="bi bi-eye ms-2 fs-3" style="cursor: pointer;" id="eye2"></i>
                        </div>
                        <button type="submit" name="register" class="btn btn-danger form-control">Daftar</button>
                    </form>
                    <p class="text-center mt-2">bisa juga pakai</p>
                    <div class="text-center mt-3">
                        <a href="#" class="btn btn-outline-dark"><i class="bi bi-facebook"
                                style="margin-right:10px"></i>Facebook</a>
                        atau
                        <a href="#" class="btn btn-outline-dark"><i class="bi bi-google"
                                style="margin-right:10px"></i>Google</a>
                    </div>
                    <div class="text-center mt-3">
                        <p>Sudah punya akun? <a href="login.php" style="font-weight:700">
                                Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require 'partials/script.php'; ?>
    <script>
        let eye = document.getElementById('eye');
        let password = document.getElementById('password');

        // versi javascript only
        eye.addEventListener('click', function () {
            let type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('bi-eye');
            this.classList.toggle('bi-eye-slash');
        })

        // versi jquery
        $('#eye2').on('click', function () {
            let type = $('#password2').attr('type') === 'password' ? 'text' : 'password';
            $('#password2').attr('type', type);
            this.classList.toggle('bi-eye');
            this.classList.toggle('bi-eye-slash');
        })
    </script>
</body>

</html>