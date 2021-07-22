<?php

function cekPalindrom($kalimat)
{
    $kalimat_arr = explode(" ", $kalimat);
    $awal_arr = reset($kalimat_arr);
    $akhir_arr = strrev(end($kalimat_arr));
    if($awal_arr === $akhir_arr){
        return True;
    }else{
        return False;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <title>Aplikasi Palindrome</title>
</head>
<body>
    <h1>Cek Palindrom</h1>

    <form action="index.php" method="POST">
        <label for="input">Masukan kalimat :</label>
        <input type="text" name="input" id="input">
        <input type="submit" name="submit"><br>
        <?php if(isset($_POST["submit"])){
            var_dump(cekPalindrom($_POST["input"])) ;
        } 
        ?>
    </form>

</body>
</html>

