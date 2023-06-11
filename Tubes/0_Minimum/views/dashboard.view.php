<!DOCTYPE html>
<html lang="en" id="home">
<?php require 'partials/header.php'; ?>

<!-- bootstrap css -->
<link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />
<!-- bootstrap icon -->
<link rel="stylesheet" href="../../node_modules/bootstrap-icons/font/bootstrap-icons.css" />

<body>
    <div class="container-sidebar">
        <?php require 'partials/sidebar.php'; ?>
        <div class="main-content">
            <div class="dashboard" style="overflow-y: scroll;height: 100vh;">
                <div class="row p-5">
                    <div class="title text-center">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, consequatur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'partials/script.php' ?>
</body>

</html>