<?php
$uang = 145500;
$pecahanA = 20000;
$pecahanB = 100000;
$pecahanC = 500;

$lembarB = floor($uang / $pecahanB);
$sisaUang = $uang % $pecahanB;


$lembarA = floor($sisaUang / $pecahanA);
$sisaUang = $sisaUang % $pecahanA;

$lembarC = floor($sisaUang / $pecahanC);
$sisaUang = $sisaUang % $pecahanC;


$uangFormat = number_format($uang, 0, ',', '.');
$pecahanBFormat = number_format($pecahanB, 0, ',', '.');
$pecahanAFormat = number_format($pecahanA, 0, ',', '.');
$pecahanCFormat = number_format($pecahanC, 0, ',', '.');

echo "Total uang: Rp $uangFormat\n";
echo "<br>";
echo "Pecahan Rp $pecahanBFormat: $lembarB lembar\n";
echo "<br>";
echo "Pecahan Rp $pecahanAFormat: $lembarA lembar\n";
echo "<br>";
echo "Pecahan Rp $pecahanCFormat : $lembarC lembar\n";

