<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>
    <h3>Segitiga</h3>
     <form action="" method="post">
             Alas : <input type="text" name ="alas"><br><br>
             Tinggi : <input type="text" name ="tinggi"><br><br>
                     <input type ="Submit" name ="Input">
 </form>
</body>
</html>

<?php
 if (isset($_POST['Input'])) {
     $alas=$_POST['alas'];
     $tinggi=$_POST['tinggi'];
     $luas = 0.5 * $alas * $tinggi;
     $keliling = $alas * 3;

     echo "<br>Alas = $alas";
     echo "<br>Tinggi = $tinggi";
     echo "<br><b>Hasilnya :</b>";
     echo "<br>Keliling = $keliling";
 }
 ?>