<?php
class Produk
{
    // Properti dari kelas Produk
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    // Konstruktor untuk inisialisasi properti
    public function __construct(
        $judul,
        $penulis,
        $penerbit,
        $harga
    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Method untuk mendapatkan informasi produk
    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    // Method untuk mendapatkan label penulis dan penerbit
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

class Komik extends Produk
{
    public $jmlHalaman;

    // Konstruktor untuk inisialisasi properti khusus Komik
    public function __construct(
        $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman = 0
    ) {
        // Memanggil konstruktor kelas Produk
        parent::__construct(
            $judul,
            $penulis,
            $penerbit,
            $harga
        );
        $this->jmlHalaman = $jmlHalaman;
    }

    // Method untuk mendapatkan informasi produk Komik
    public function getInfoProduk()
    {
        $str = "Komik :" . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;

    // Konstruktor untuk inisialisasi properti khusus Game
    public function __construct(
        $judul,
        $penulis,
        $penerbit,
        $harga,
        $waktuMain = 0
    ) {
        // Memanggil konstruktor kelas Produk
        parent::__construct(
            $judul,
            $penulis,
            $penerbit,
            $harga
        );
        $this->waktuMain = $waktuMain;
    }

    // Method untuk mendapatkan informasi produk Game
    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    // Method untuk mencetak informasi produk
    public static function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// Membuat instance produk Komik dan Game
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("One Piece", "Eiichiro Oda", "Shueisha", 35000, 50);

// Menampilkan informasi produk
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
