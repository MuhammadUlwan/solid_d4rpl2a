<?php
include_once 'Lampu.php';
include_once 'KipasAngin.php';
include_once 'Saklar.php';

// Membuat objek lampu dan kipas angin
$lampu = new Lampu();
$kipasAngin = new KipasAngin();

// Membuat objek saklar untuk lampu
$saklarLampu = new Saklar($lampu);

// Mengoperasikan lampu dengan saklar
echo "Mengoperasikan lampu :";
echo "<br>";
$saklarLampu->berubah(); // Menyala
echo "<br>";
$saklarLampu->berubah(); // Mati
echo "<br>";
$saklarLampu->berubah(); // Menyala kembali

echo "<br>";
echo "<br>";

// Membuat objek saklar untuk kipas angin
$saklarKipasAngin = new Saklar($kipasAngin);

// Mengoperasikan kipas angin dengan saklar
echo "Mengoperasikan kipas angin :";
echo "<br>";
$saklarKipasAngin->berubah(); // Berputar
echo "<br>";
$saklarKipasAngin->berubah(); // Berhenti berputar
echo "<br>";
$saklarKipasAngin->berubah(); // Berputar kembali