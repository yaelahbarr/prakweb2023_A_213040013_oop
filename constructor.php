<?php

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

$produk1 = new Produk("Watchdogs", "Aiden Pearce", "Ubisoft", 50000);
$produk2 = new Produk("Arkham Night", "Bruce Wayne", "DC Comics", 35000);
$produk3 = new Produk("Spider-Man");


echo "Game : " . $produk1->getLabel();
echo "<br>";
echo "Komik : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);