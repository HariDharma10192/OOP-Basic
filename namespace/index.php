<?php

require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Mashashi Kishimoto", "Shonen Jump", 21, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 35, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

use App\Produk\User as ProdukUser;
use App\Servis\User as ServisUser;

new ProdukUser();
echo "<br>";
new ServisUser();
