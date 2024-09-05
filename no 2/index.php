<?php



if(isset($_POST["btn"])){
    $lamaKerja = $_POST["lamaKerja"];
    $jamLebih = $_POST["jamLebih"];
    $upahTambahakan = 0;
    
    if($lamaKerja >= 8){
        $upahTambahakan = ($jamLebih - 1) * 25;
        $upahTambahakan += 50;
        echo $upahTambahakan;
        $total;
    }else {
        echo "anda tidak lembur";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="lamaKerja" placeholder="lama kerja">
        <input type="number" name="jamLebih" placeholder="jam lebih">
        <button type="submit" name="btn">CEK GAJI</button>
    </form>
</body>
</html>




