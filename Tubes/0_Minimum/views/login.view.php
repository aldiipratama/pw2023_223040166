<!DOCTYPE html>
<html lang="en">
<?php require 'partials/header.php'; ?>

<body>


    <div class="container">
        <div class="row justify-content-center mt-2">
            <div class="col-lg-5">
                <div class="back">
                    <button onclick="history.back()" class="position-absolute top-0 mt-4"
                        style="width: 10px; background:none;"><i class="bi bi-arrow-left-circle"></i></button>
                </div>
                <div class="form-login mt-4 p-5 shadow-lg rounded">
                    <h4 class="text-center">Login dulu, yuk</h4>
                    <?php if (isset($error)): ?>
                        <p class="text-danger fst-italic">username / password salah!</p>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="my-4">
                            <input type=" email" name="email" id="email" class="form-control" placeholder="Email"
                                required>
                            <label class="form-label fs-9 text-secondary">Contoh: Example@gmail.com</label>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <input type="password" name="psw" id="password" class="form-control" placeholder="Password"
                                required>
                            <i class="bi bi-eye ms-2 fs-3" style="cursor: pointer;" id="eye"></i>
                        </div>
                        <button type="submit" name="login" class="btn btn-danger form-control">Login</button>
                    </form>
                    <p class="text-center mt-2">atau login pakai</p>
                    <div class="text-center mt-3">
                        <a href="#" class="btn btn-outline-dark"><i class="bi bi-facebook"
                                style="margin-right:10px"></i>Facebook</a>
                        atau
                        <a href="#" class="btn btn-outline-dark"><i class="bi bi-google"
                                style="margin-right:10px"></i>Google</a>
                    </div>
                    <div class=" text-center mt-3">
                        <p>Belum punya akun? <a href="registrasi.php" style="font-weight:700">Daftar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require 'partials/script.php'; ?>
    <script>
        $("#eye").on("click", function () {
            let type = $("#password").attr("type") === "password" ? "text" : "password";
            $("#password").attr("type", type);
            this.classList.toggle("bi-eye");
            this.classList.toggle("bi-eye-slash");
        });

    </script>
</body>

</html>