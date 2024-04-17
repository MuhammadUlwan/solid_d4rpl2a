<?php
class MahasiswaView {
    public function showMahasiswa(Mahasiswa $mhs): void {
        echo "NIM: " . $mhs->getNim() . "\n";
        echo "Nama: " . $mhs->getNama() . "\n";
    }
}