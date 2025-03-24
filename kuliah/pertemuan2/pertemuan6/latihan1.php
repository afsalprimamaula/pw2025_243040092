<?php
// membuat Array

$hari = array('senin', 'selasa', 'rabu');
$bulan = ['januari', 'februari', 'maret'];
$myarray = ['afsal', 18, true];

// mencetak / menampilkan array

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
// gunakan echo jika ingin mencetak 1  elemen (menggunakan index)
echo $hari[2];
echo "<br>";
echo $myarray[0];
echo "<hr>";

// menambah isi array
// gunakan []
$hari[] = 'kamis';
$bulan[] = 'april';
print_r($hari);
echo "<br>";
print_r($bulan);
