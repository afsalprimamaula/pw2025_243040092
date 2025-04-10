<?php
$angka = isset($_GET['angka']) ? (int)$_GET['angka'] : 1;

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Box Angka Terurut</title>
    <style>
        .box {
            display: inline-block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border: 2px solid #000;
            margin: 2px;
            background-color: pink;
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    for ($i = $angka; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='box'>$i</div>";
        }
        echo "<br>";
    }
    ?>

</body>

</html>