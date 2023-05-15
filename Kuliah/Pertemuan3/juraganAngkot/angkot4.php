<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkot4</title>
</head>
<body>
    <?php for ($angkot = 1; $angkot <= 10; $angkot++) : ?>
        <?php if ($angkot <= 6) : ?>
            <p><?= "Angkot no. $angkot beroperasi dengan baik." ?></p>
        <?php elseif ($angkot == 8) : ?>
            <p><?= "Angkot no. $angkot sedang lembur." ?></p>
        <?php else : ?>
            <p><?= "Angkot no. $angkot sedang rusak." ?></p>
        <?php endif ?>
    <?php endfor ?>
</body>
</html>