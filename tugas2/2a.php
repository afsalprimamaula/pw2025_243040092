<?php
$nama_depan = "Afsal";
$nama_belakang = "Prima Maula";

for ($i = 1; $i <= 100; $i++) {

    // Habis dibagi 3 dan 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "$nama_depan $nama_belakang <br>";
    }

    // Habis dibagi 3
    elseif ($i % 3 == 0) {
        echo "$nama_depan <br>";
    }

    // Habis dibagi 5
    elseif ($i % 5 == 0) {
        echo "$nama_belakang <br>";
    }

    // Agar angkanya tampil
    else {
        echo "$i<br>";
    }
}
