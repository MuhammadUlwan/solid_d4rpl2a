<?php
include_once 'Debit.php';
include_once 'Kredit.php';
include_once 'Cash.php';
include_once 'PembayaranCustomer.php';

// Membuat objek pembayaran
$pembayaran = new PembayaranCustomer();

// Memproses pembayaran dengan metode Debit
$pembayaran->menerimaPembayaran(new Debit());
echo "<br>";
// Memproses pembayaran dengan metode Kredit
$pembayaran->menerimaPembayaran(new Kredit());
echo "<br>";
// Memproses pembayaran dengan metode Cash
$pembayaran->menerimaPembayaran(new Cash());
