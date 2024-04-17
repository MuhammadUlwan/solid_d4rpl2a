<?php
class PenghitungPersegi {
    public static function hitungLuas(Persegi $persegi) {
        return $persegi->getSisi() ** 2;
    }
}

