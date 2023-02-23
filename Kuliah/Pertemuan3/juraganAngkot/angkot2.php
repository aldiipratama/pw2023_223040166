<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkot2</title>
</head>
<body>
    <?php 
    
    $angkot = 1;
    while($angkot <= 6){
        echo "Angkot no. $angkot beroperasi dengan baik.<br>";
        $angkot++;
    }

    for ($angkot = 7; $angkot <= 10; $angkot++){
        echo "Angkot no. $angkot sedang rusak.<br>";
    }

    ?>
    
</body>
</html>