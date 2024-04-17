<?php
include_once 'Kubus.php';
include_once 'Persegi.php';

// Case 1: Bentuk 3 Dimensi
echo "======= Case 1: Bentuk 3 Dimensi =======";
echo "<br>";
$kubus = new Kubus();
$kubus->calculateVolume();
echo "<br>";
$kubus->calculateArea();

echo "<br>";

$persegi = new Persegi();
$persegi->calculateArea();
?>