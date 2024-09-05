<?php

$array1 = [1, 2, 3, 4, 5, 6];
$array2 = [4, 5, 6, 7, 8, 9];

// bilangan yang sama kedua
$kelompokPertama = array_intersect($array1, $array2);

$kelompokKedua = array_merge(
    array_diff($array1, $array2),  // Bilangan ada di $array1 tapi tidak di $array2
    array_diff($array2, $array1)   // Bilangan ada di $array2 tapi tidak di $array1
);

echo "Kelompok Pertama (Bilangan yang sama): " . implode(", ", $kelompokPertama) . "<br>";
echo "Kelompok Kedua (Bilangan yang berbeda): " . implode(", ", $kelompokKedua) . "<br>";


