<?php
include_once "FiturFax.php";

class PrinterFlagship {
    public function cetakKertas(): void {
        echo "Print kertas";
    }

    public function terimaFax(): void {
        echo "Menerima fax";
    }

    public function scanKertas(): void {
        echo "Scan kertas";
    }
}