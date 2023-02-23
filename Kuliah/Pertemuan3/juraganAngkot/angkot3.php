<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkot3</title>
</head>
<body>
    <?php for ($angkot = 1; $angkot <= 6; $angkot++) : ?>
            <p><?= "Angkot no. $angkot beroperasi dengan baik.<br>"; ?></p>
    <?php endfor ?>
    <?php for ($angkot = 7; $angkot <= 10; $angkot++) : ?>
        <p><?= "Angkot no. $angkot sedang rusak.<br>"; ?></p>
    <?php endfor ?>
</body>
</html>