<?php
$hargakambing = 8000;
$hargajual = 7500;
$keuntungan = 300;

echo "Harga Beli =  Rp $hargakambing<br>";
echo "Harga Jual = $hargajual <br>";
echo "Keuntungan = $keuntungan <br>";

$jumlahekor = ($hargajual - $hargakambing) / $keuntungan;
echo "Berapa Jumlah Kambing yang dibeli ? Jawaban : $jumlahekor ekor atau 1 - 2 Ekor";
?>