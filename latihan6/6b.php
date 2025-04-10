<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Input Angka</title>
    <style>
        .box {
            width: 40px;
            height: 40px;
            display: inline-block;
            text-align: center;
            line-height: 40px;
            border: 1px solid black;
            background-color: purple;
        }
    </style>
</head>

<body>
    <form method="post">
        <label for="angka">Masukkan Angka : </label>
        <input type="number" name="angka" required>
        <input type="submit" value="Tampilkan">
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka = intval($_POST['angka']);

        if ($angka > 0) {
            for ($i = $angka; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "<div class='box'>$i</div>";
                }
                echo "<br>";
            }
        }
    }
    ?>
</body>

</html>