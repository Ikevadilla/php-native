<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <legend>Lingkaran</legend>
<form method="post" action ="">
    Masukan Bilangan : <input type ="text" name ="bil">
    <input type ="submit" name="input" value="input">
</form>
</fieldset>
</body>
</html>


<?php
if (isset($_POST['save'])){
    $a = $_POST['jari'];

    function LuasLingkaran($jari, $phi = 3.14)
    {
        $luas = $phi * $jari * $jari;
        return $luas;
    }
    function KelilingLingkaran ($jari, $phi = 3.14) 
    {
        $keliling = 2 * ($phi * $jari);
        return $keliling;
    }
    ?>

    Jari jari = <?php echo $a; ?> <br>
    Luas Lingkaran = <?php echo LuasLingkaran ($a) : ?> <br>
    Keliling Lingkaran = <?php echo KelilingLingkaran ($a) : ?> 