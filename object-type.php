
<?php
// Jualan produk
// Komik
// Game

//MEMBUAT PROPERTY DAN METOD

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}


class CetakInfoProduk
{
    public static function cetak(produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()}(Rp. {$produk->harga})";
        return $str;
    }
}
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("One Piece", "Eiichiro Oda", "Shueisha", 35000);
// $produk3 = new Produk("Minecraft", "Markus Persson", "Mojang", 200000);

echo "Komik 1: " . $produk1->getLabel() . ", Harga: " . $produk1->harga . " rupiah.<br>";
echo "Komik 2: " . $produk2->getLabel() . ", Harga: " . $produk2->harga . " rupiah.<br>";
// echo "Game: " . $produk3->getLabel() . ", Harga: " . $produk3->harga . " rupiah.<br>";

//
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
