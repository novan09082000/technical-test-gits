<?php

function tampilHelloWorld($nilai)
{
    if(($nilai % 3 == 0) and ($nilai % 5 == 0)){
        return "Hello World";
    }elseif($nilai % 3 == 0){
        return "Hello";
    }elseif($nilai % 5 == 0){
        return "World";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Hello World</title>
</head>
<body>
<h1>Menampilkan Hello World</h1>
    <form action="index.php" method="post">
        <label for="input">Masukan angka disini :</label>
        <input type="text" name="input" id="input">
        <input type="submit" name="submit"><br>
        <?php if(isset($_POST["submit"])):?>
            <label for="" style="font-weight: bold;">
                <?= tampilHelloWorld($_POST["input"]) ?>
            </label>
        <?php endif; ?>
        <br><br><br>
        <label for="" style="font-size: small;" >
            Keterangan :
            <ul>
                <li>Output akan menampilkan "Hello" apabila nilai Input adalah bilangan habis dibagi 3</li>
                <li>Output akan menampilan "World" pabila nilai input adalah bilangan habis dibagi 5</li>
                <li>Namun jika bilangan nilai Input habis dibagi 3 dan 5 maka output akan menampilkan "Hello World"</li>
            </ul>
        </label>   
    </form>
</body>
</html>