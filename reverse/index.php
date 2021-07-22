<?php

function Reverse($kalimat)
{
    $reverse = strrev($kalimat);
    return $reverse; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Reverse</title>
</head>
<body>
<h1>Mengembalikan Kalimat/Kata </h1>
    <form action="index.php" method="post">
        <label for="input">Masukan kalimat disini :</label>
        <input type="text" name="input" id="input">
        <input type="submit" name="submit"><br>
        <?php if(isset($_POST["submit"])): ?>
            <label for="" style="font-weight: bold;">
                <?= Reverse($_POST["input"]) ?>
            </label>
        <?php
        endif;
        ?>
    </form>    
</body>
</html>