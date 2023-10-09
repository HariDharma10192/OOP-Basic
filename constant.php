<?php

// // constant global (hanya boleh diguna di luar kelas).
// define('NAMA', 'Sandhika Galih');
// echo NAMA;

// echo "<br>";
// // boleh disimpan di dalam kelas.
// const UMUR = 32;
// echo UMUR;

// class Coba
// {
//     const NAMA = 'Sandhika Galih';
// }

// // cara akses constant:
// echo Coba::NAMA;

// echo __LINE__;
// echo "<br>";
// echo __FILE__;
// echo "<br>";

// function Coba()
// {
//     return __FUNCTION__;
// }

// echo Coba();

class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
