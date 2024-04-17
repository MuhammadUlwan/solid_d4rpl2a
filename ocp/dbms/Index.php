<?php
include_once 'MySQL.php';
include_once 'MongoDB.php';
include_once 'DBMSConnection.php';

// Membuat objek koneksi DBMS
$dbmsConnection = new DBMSConnection();

// Membuat koneksi dengan MySQL
$dbmsConnection->connect(new MySQL());
echo "<br>";
// Membuat koneksi dengan MongoDB
$dbmsConnection->connect(new MongoDB());