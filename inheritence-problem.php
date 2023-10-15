<?php

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = "tipe") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;

    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp, {$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman. ";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }

}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Watchdogs", "Aiden Pearce", "Ubisoft", 50000, 0, 50, "Game");
$produk2 = new Produk("Arkham Night", "Bruce Wayne", "DC Comics", 35000, 100, 0, "Komik");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();



