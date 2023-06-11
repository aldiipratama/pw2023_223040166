<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/css/admin.css" />
    <title>TourismAgency |
        <?= $title; ?>
    </title>
    <!-- jquery -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            // event ketika keyword ditulis
            $("#livesearch").on("keyup", function () {
                //     // ajax menggunakan load
                //     $("#content").load("ajax/tourism.php?keyword=" + $("#keyword").val());

                $.get(
                    "ajax/tourism.php?keyword=" + $("#livesearch").val(),
                    function (data) {
                        $("#content").html(data);
                    }
                );
            });
        });

    </script>
</head>