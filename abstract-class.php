<?php
// Definisikan kelas abstrak "Produk"
abstract class Produk
{
    // Properti dari kelas Produk
    private $judul,
        $penulis, $penerbit, $harga, $diskon = 0;

    // Konstruktor untuk inisialisasi properti
    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0
    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // ... Metode setter dan getter ...

    // Metode abstrak untuk mendapatkan informasi produk
    abstract public function getInfoProduk();

    // Metode untuk mendapatkan informasi produk
    public function getInfo()
    {
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (RP. {$this->harga})";
        return $str;
    }
}

// Kelas turunan "Komik" dari kelas "Produk"
class Komik extends Produk
{
    public $halaman;

    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $halaman = 0
    ) {
        // Memanggil konstruktor kelas induk (Produk)
        parent::__construct(
            $judul,
            $penulis,
            $penerbit,
            $harga
        );
        $this->halaman = $halaman;
    }

    // Implementasi metode abstrak untuk mendapatkan informasi produk (Komik)
    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->halaman} Halaman";
        return $str;
    }
}

// Kelas turunan "Game" dari kelas "Produk"
class Game extends Produk
{
    public $durasi;

    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $durasi = 0
    ) {
        // Memanggil konstruktor kelas induk (Produk)
        parent::__construct(
            $judul,
            $penulis,
            $penerbit,
            $harga
        );
        $this->durasi = $durasi;
    }

    // Implementasi metode abstrak untuk mendapatkan informasi produk (Game)
    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " ~ {$this->durasi} Jam";
        return $str;
    }
}

// Kelas untuk mencetak informasi produk
class CetakInfoProduk
{
    public $daftarProduk = array();

    // Metode untuk menambahkan produk ke daftar
    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    // Metode untuk mencetak daftar produk
    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

// Membuat instance produk Komik dan Game
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

// Membuat instance untuk mencetak informasi produk
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak(); // Mencetak informasi produk
