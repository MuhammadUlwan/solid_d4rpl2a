<?php
include_once "KendaraanListrik.php";

class MobilListrik implements KendaraanListrik {
    public function menggunakanBaterai(): void {
        echo "Mobil Listrik menggunakan baterai\n";
    }
}