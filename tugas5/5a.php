<?php
$mahasiswa = [
    [
        "nama" => "Afsal Prima",
        "nrp" => "243040092",
        "email" => "afsalmahasiswa@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "afsal.jpg"
    ],
    [
        "nama" => "rahul",
        "nrp" => "240000001",
        "email" => "rahulmahasiswa@gmail.com",
        "jurusan" => "Teknik pangan",
        "gambar" => "AH.jpg"
    ],
    [
        "nama" => "sopo",
        "nrp" => "240000002",
        "email" => "sopomahasiswa@gmail.com",
        "jurusan" => "hukum",
        "gambar" => "sopo.jpg"
    ],
    [
        "nama" => "denis",
        "nrp" => "240000003",
        "email" => "denismahasiswa@gmail.com",
        "jurusan" => "akuntansi",
        "gambar" => "denise.jpg"
    ],
    [
        "nama" => "jarwo",
        "nrp" => "240000004",
        "email" => "jarwomahasiswa@gmail.com",
        "jurusan" => "manejemen",
        "gambar" => "jarwo.jpg"
    ],
    [
        "nama" => "messi",
        "nrp" => "240000005",
        "email" => "messimahasiswa@gmail.com",
        "jurusan" => "matematika",
        "gambar" => "messi.jpg"
    ],
    [
        "nama" => "antony",
        "nrp" => "240000006",
        "email" => "antonymahasiswa@gmail.com",
        "jurusan" => "teknik sipil",
        "gambar" => "antony.jpg"
    ],
    [
        "nama" => "ronaldo",
        "nrp" => "240000007",
        "email" => "ronaldomahasiswa@gmail.com",
        "jurusan" => "sastra arab",
        "gambar" => "cr.jpg"
    ],
    [
        "nama" => "justin",
        "nrp" => "240000008",
        "email" => "justinmahasiswa@gmail.com",
        "jurusan" => "musik",
        "gambar" => "JB.jpg"
    ],
    [
        "nama" => "neymar",
        "nrp" => "240000009",
        "email" => "neymarmahasiswa@gmail.com",
        "jurusan" => "fisika",
        "gambar" => "neymar.jpg"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs['nama'] ?></li>
            <li>NRP : <?= $mhs['nrp'] ?></li>
            <li>Jurusan : <?= $mhs['jurusan'] ?></li>
            <li>Email : <?= $mhs['email'] ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>