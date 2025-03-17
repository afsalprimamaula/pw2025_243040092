<?php
echo "waktu saat ini <br>";
echo date("j M Y");
echo "<hr>";

echo "hari ini:";
echo date("l");
echo "<br>";
echo "100 hari dari sekarang hari ";
echo date("l", time() + 60 * 60 * 24 * 100);
