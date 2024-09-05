<?php





if(isset($_POST["btn"])){
    $namaPertama = $_POST["nama1"];
    $namaKedua = $_POST["nama2"];
    $hasil = strlen($namaPertama) - strlen($namaKedua);
    $hilang = str_replace("-", "", $hasil);
    if (strlen($namaPertama) > strlen($namaKedua)) {
        echo "$namaPertama adalah string paling panjang. selisih $hilang";
    } elseif (strlen($namaPertama) < strlen($namaKedua)) {
        echo "$namaKedua adalah string paling panjang. selisih $hilang";
    } else {
        echo "Kedua string memiliki panjang yang sama.";
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
        <input type="text" name="nama1" placeholder="nama1">
        <input type="text" name="nama2" placeholder="nama2">
        <button type="submit" name="btn">cek panjang nama</button>
    </form>
</body>
</html>