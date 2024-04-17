<?php
include_once 'Mobil.php';
include_once 'MobilListrik.php';

// Case 2: Kendaraan
echo "======= Case 2: Kendaraan =======";
echo "<br>";
$mobil = new Mobil();
$mobil->menggunakanBBM();

echo "<br>";

$mobilListrik = new MobilListrik();
$mobilListrik->menggunakanBaterai();