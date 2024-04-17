<?php

include_once "Mahasiswa.php";
include_once "MahasiswaView.php";

// Membuat objek Mahasiswa
$mahasiswa = new Mahasiswa("2205020", "Muhammad Ulwan");

// Membuat objek MahasiswaView
$mahasiswaView = new MahasiswaView();

// Menampilkan data Mahasiswa
$mahasiswaView->showMahasiswa($mahasiswa);

?>