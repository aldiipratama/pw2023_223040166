<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
<?php 
    $binatang = ['🐈', '🐇', '🐕', '🐎', '🦍'];
    $makanan = ['🍜', '🍔','🌭','🍞','🥩'];
?>
    <h2>Daftar Binatang</h2>
    <ol>
        <?php foreach ($binatang as $b) : ?>
            <li><?= $b ?></li>
        <?php endforeach ?>
    </ol>

    <h2>Daftar Makanan</h2>
    <ol>
    <?php foreach ($makanan as $m) : ?>
            <li><?= $m ?></li>
        <?php endforeach ?>
    </ol>
</body>
</html>