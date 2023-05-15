<?php 

// ARRAT
// Membuat arrat
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$arr = ['Rinaldi', 20, false];
$binatang = ['🐈', '🐇', '🐕', '🐎', '🦍'];

//Mencetak array
//Mencetak 1 elemen array menggunakan echo
echo $binatang[0];
echo "<br>";
var_dump($hari);
echo "<br>";
echo "<hr>";
var_dump($binatang);
echo "<br>";
print_r($binatang);
echo "<hr>";

//Manipulasi array
//Menggunakan index

$hari[] = "kamis";
print_r($hari);
echo "<br>";

//Menambahkankan elemen di akhir dengan mengosongkan indexnya
$hari[] = "Jum'at";
$hari[] = "sabtu";
print_r($hari); 
echo "<hr>";

//Menambahkan elemen di akhir menggunakan array_push
$bulan[] = "April";
array_push($bulan, 'Mei', 'Juni', 'Juli');
print_r($bulan);

?>