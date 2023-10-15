<?php

class Produk {
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

$produk3 = new Produk();
$produk3->judul = "Watchdogs";
$produk3->penulis = "Aiden Pearce";
$produk3->penerbit = "Ubisoft";
$produk3->harga = 50000;


$produk4 = new Produk();
$produk4->judul = "Arkham Night";
$produk4->penulis = "Bruce Wayne";
$produk4->penerbit = "DC Comics";
$produk4->harga = 35000;

echo "Game : " . $produk3->getLabel();
echo "<br>";
echo "Komik : " . $produk4->getLabel();