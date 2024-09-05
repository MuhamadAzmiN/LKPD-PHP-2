<?php

$perkalian = 1;
for($i = 0 ; $i < 12 ; $i++){
    if ($i % 2 != 0) {  
        $hasil = $i * 5;
        echo "$i x 5 = $hasil<br>";
    }
}