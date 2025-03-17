<?php

// Membuat array dengan 6 elemen string (nama perangkat keras komputer)
// Menampilkan list perangkat keras komputer awal
// Menambahkan 2 elemen baru ke dalam array
// Mengurutkan array secara menaik (A-Z)
// Menampilkan list perangkat keras komputer terbaru

$pk = array("Motherboard", "Processor", "Hard Disk", "PC Cooler", "VGA Card", "SSD");

echo "<h3>Macam-macam perangkat keras komputer</h3>";
echo "<ol>";
foreach ($pk as $perangkat) {
    echo "<li>$perangkat</li>";
}
echo "</ol>";

array_push($pk, "Card Reader", "Modem");

sort($pk);

echo "<h3>Macam-macam perangkat keras komputer baru</h3>";
echo "<ol>";
foreach ($pk as $perangkat) {
    echo "<li>$perangkat</li>";
}
echo "</ol>";
