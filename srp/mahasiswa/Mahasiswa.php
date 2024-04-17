<?php
class Mahasiswa {
    private $nim;
    private $nama;

    public function __construct($nim, $nama) {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    public function getNim(): string {
        return $this->nim;
    }

    public function getNama(): string {
        return $this->nama;
    }
}