<?php

$listUsia = [12,15,17,20,25,30,35,40,45,50];
// $cariUsia = 17;
$jumlahAnak = 0;
$jumlahDewasa = 0;


foreach($listUsia as $data){
    
    if($data < 17){
        $jumlahAnak++;
    }else if($data > 12 ){
        $jumlahDewasa++;
    }else {
        echo "tidak ada data";
    }
    
}


echo "Anak-anak  : $jumlahAnak";
echo "<br>";
echo "Dewasa : $jumlahDewasa";