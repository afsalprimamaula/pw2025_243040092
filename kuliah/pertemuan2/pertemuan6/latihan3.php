<!-- pada echo $?[] index pertama menentukan array yg  luar  -->
<!-- pada echo $?[] index kedua menentukan array yg dalam -->

<?php
$mahasiswa = [
    ['afsal', '243040092', 'afsalprimamaula@gmail.com', 'informatika'],
    ['rrahul', '243040999', 'rahuls@gmail.com', 'akuntansi']
];
echo $mahasiswa[0][1];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array bersarang</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>nama: <?= $m[0]; ?></li>
            <li>nim: <?= $m[1]; ?></li>
            <li>email: <?= $m[2]; ?></li>
            <li>jurusan: <?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>