<?php

require_once "Persegi.php";
require_once "Lingkaran.php";
require_once "Segitiga.php";

$persegi = new persegi(4);
$lingkaran = new lingkaran(7);
$segitiga = new segitiga(6,8);

echo "Luas Persegi : " . $persegi->hitungLuas();
echo "<br>";

echo "Luas Lingkaran : " . $lingkaran->hitungLuas();
echo "<br>";

echo "Luas Segitiga : " . $segitiga->hitungLuas();

?>