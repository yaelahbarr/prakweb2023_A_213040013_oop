<?php


require_once 'App/init.php';

// $produk1 = new Komik("The Batman", "Bruce Wayne", "DC Comics", 30000, 100, 0);
// $produk2 = new Game("Watch Dogs", "Aiden Pearce", "Ubisoft", 250000, 0, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUSer;

new ServiceUser();
echo "<br>";
new ProdukUser();

?>