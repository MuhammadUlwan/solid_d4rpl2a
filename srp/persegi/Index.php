<?php

include_once "Persegi.php";
include_once "PenghitungPersegi.php";

// Membuat objek Persegi
$sisi = 10; // Ini bisa diganti dengan inputan variabel apapun
$persegi = new Persegi($sisi);

// Menghitung luas persegi
$luas = PenghitungPersegi::hitungLuas($persegi);
echo "Luas persegi dengan sisi $sisi: $luas";
?>