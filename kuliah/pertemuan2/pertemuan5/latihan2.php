<?php
// <!-- menghitung volume 2 kubus -->
//  <!-- dietahui kubus a & b -->
$sisi_a = 9;
$sisi_b = 4;
//  <!-- hitung volume kubus  a -->
//   <!-- hitung volume  kubus  B -->
//    <!-- jumlahkan keduanya -->
//     <!-- cetak hasilnya ke layar -->

function hitung_volume_dua_kubus($a, $b)
{
    $volume_a = $a * $a * $a;
    $volume_b = $b * $b * $b;
    $total_volume_ab = $volume_a + $volume_b;
    return $total_volume_ab;
}

echo "total volume kubus 9 & 4: ";
