<?php
include_once 'PrinterFlagship.php';
include_once 'PrinterEntryLevel.php';
include_once 'PrinterMidRange.php';

// Case 2: Fitur Printer
echo "======= Case 2: Fitur Printer =======";
echo "<br>";
$printerFlagship = new PrinterFlagship();
$printerFlagship->cetakKertas();
echo "<br>";
$printerFlagship->terimaFax();
echo "<br>";
$printerFlagship->scanKertas();

echo "<br>";
echo "<br>";

$printerEntryLevel = new PrinterEntryLevel();
$printerEntryLevel->cetakKertas();

echo "<br>";
echo "<br>";

$scannerMidRange = new ScannerMidRange();
$scannerMidRange->cetakKertas();
echo "<br>";
$scannerMidRange->scanKertas();