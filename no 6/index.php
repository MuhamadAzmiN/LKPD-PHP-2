<?php
$student = [
    [
        "nama" => "andi",
        "nilai" => [80, 78, 82, 78, 60],
    ],
    [
        "nama" => "azmi",
        "nilai" => [80, 78, 82, 78, 88],
    ],
    [
        "nama" => "asep",
        "nilai" => [80, 78, 82, 78, 90],
    ],
];
foreach($student as $data){
    $nilai = $data["nilai"];
    $totalNilai = array_sum($nilai);
    $jumlahNilai = count($nilai);
    $rataRata = $totalNilai / $jumlahNilai;

    echo "Rata-rata nilai untuk " . $data["nama"] . ": " . number_format($rataRata, 2) . "<br>";
  
}