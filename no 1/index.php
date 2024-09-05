<?php

if(isset($_POST["btn"])){
    $cek = $_POST["cek"];
    if(is_numeric($cek)){
        echo "text mengandung angka " . number_format($cek / 10, 1, ',', '');
    }else{
        echo "text tidak mengandung angka ";    
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
    <form method="POST">
        <input type="text" name="cek" placeholder="tulis nama....">
        <button name="btn" type="submit">klik</button>
    </form>
</body>
</html>

