<?php

$data = [80,90,100,100,20];

$dataCari = 30;


$jumlahKemunculkan = array_count_values($data)[$dataCari] ?? 0;
echo "jumlah angka $dataCari =  $jumlahKemunculkan";