<?php
class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $type;

    public function __construct(
        $judul,
        $penulis,
        $penerbit,
        $harga,
        $type,
        $jmlHalaman = 0,
        $waktuMain = 0
    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->type = $type;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->type} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->type == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } elseif ($this->type == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        return  $str;
    }
}

class CetakInfoProduk
{
    public static function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()}(Rp. {$produk->harga})";
        return $str;
    }
}
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, "Komik", 100, 0);
$produk2 = new Produk("One Piece", "Eiichiro Oda", "Shueisha", 35000, "Game", 0, 50);

echo "Komik 1: " . $produk1->getLabel() . ", Harga: " . $produk1->harga . " rupiah.<br>";
echo "Komik 2: " . $produk2->getLabel() . ", Harga: " . $produk2->harga . " rupiah.<br>";
echo "<br>";
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
