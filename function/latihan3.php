<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ike Vadila</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
        <table>
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin :</td>
                <td><input type="radio" name="jk" value="laki-laki"> Laki-laki
                <input type="radio" name="jk" value="perempuan"> Perempuan</td>
            </tr>
            <tr>
                <td>Tanggal lahir : </td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>Agama :</td>
                <td>
                    <select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Kris10">Kris10</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td>
                    <textarea name="alamat" cols="20" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>Hobi : </td>
                <td>
                    <input type="checkbox" name="hobi[]" value="Bermain Basket"> Basket <br>
                    <input type="checkbox" name="hobi[]" value="Bermain Bola"> Bola <br>
                    <input type="checkbox" name="hobi[]" value="Masak"> Masak <br>
                    <input type="checkbox" name="hobi[]" value="Tidur"> Tidur <br>
                    <input type="checkbox" name="hobi[]" value="Bernyanyi"> Bernyanyi <br>
                    <input type="checkbox" name="hobi[]" value="Mendengarkan musik"> Mendengarkan Musik <br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="submit">
                </td>
            </tr>
        </table>
    </fieldset>
    </form>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    $hobi = $_POST['hobi'];
    function biodata($nama, $jk, $tl, $agama, $alamat, $hobi) {
        echo "Nama : $nama <br>";
        echo "Jenis Kelamin : $jk <br>";
        echo "Tanggal lahir : $tl <br>";
        echo "Agama : $agama <br>";
        echo "Alamat : $alamat <br>";
        echo "Hobi : ";
        foreach ($hobi as $key ) {
            echo $key;
            echo ", ";
        }
    }
    echo biodata($_POST['nama'], $_POST['jk'], $_POST['date'], $_POST['agama'], $_POST['alamat'], $hobi);

}

?>