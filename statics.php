
<?php
// class ContohStatic
// {
//     public static $angka = 1;

//     public static function halo()
//     {
//         return "Halo " . self::$angka++ . " Kali.";
//     }
// }

// echo ContohStatic::$angka; // Mengakses properti statik $angka
// echo "<br>";
// echo ContohStatic::halo(); // Memanggil method statik halo()
// echo "<hr>";

// echo ContohStatic::halo(); // Memanggil method statik halo()


class Contoh
{
    public static $angka = 1;

    public function halo()
    {
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
