<?php

    function checkFormatEmail($email)
    {
        if(strpos($email,"@") !== false){
            $bagiStringEmail = explode("@",$email);
            if((strlen($bagiStringEmail[0]) <= 20) and (strpos($bagiStringEmail[1],".")) !== false){
                $bagiStringDomain = explode(".",$bagiStringEmail[1]);
                if(($bagiStringDomain[1] === "com") or (($bagiStringDomain[1] === "co") and ($bagiStringDomain[2] === "id"))){
                    echo "<label style='font-weight: bold;'>format email anda sudah sesuai </label>";
                }else{
                    echo "<label style='font-weight: bold;'>domain yang bisa diproses hanya diperbolehkan '.com' dan '.co.id' </label>";
                }
            }else{
                echo "<label style='font-weight: bold;'>nama user email anda melebihi batas / penggunaan'.' di domain email anda tidak ada </label>";
            }
        }else{
            echo "<label style='font-weight: bold;'>email anda tidak menggunakan '@'</label>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Format Email</title>
</head>
<body>
    <h1>Cek Format Email</h1>
    <form action="index.php" method="post">
        <label for="email">Masukan Email disini :</label>
        <input type="text" name="email" id="email">
        <input type="submit" name="submit"><br>
        <?php if(isset($_POST["submit"])){
            checkFormatEmail($_POST["email"]);
        }
        ?>
    </form>
</body>
</html>