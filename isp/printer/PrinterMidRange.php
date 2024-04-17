<?php
include_once "FiturCetak.php";
include_once "FiturScan.php";

class ScannerMidRange {
    public function cetakKertas(): void {
        echo "Print kertas";
    }

    public function scanKertas(): void {
        echo "Scan kertas";
    }
}