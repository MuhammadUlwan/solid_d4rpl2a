<?php
include_once "Shape3Dimension.php";

class Kubus implements Shape3Dimension {
    public function calculateVolume(): void {
        echo "Kalkulasi volume dari kubus";
    }

    public function calculateArea(): void {
        echo "Kalkulasi area dari kubus";
    }
}