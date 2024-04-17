<?php
include_once "TipePembayaran.php";

class Kredit implements TipePembayaran {
    public function memprosesPembayaran(): void {
        echo "Memproses pembayaran dengan metode Kredit\n";
    }
}