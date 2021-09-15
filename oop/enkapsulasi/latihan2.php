<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
</head>
<body>
    <fieldset>
        <legend>Kaki Kucing Membingungkan</legend>
        <form action="" method="post">
            <table>
            <tr>
                <td>Warna Kucing</td>
                <td> : </td>
                <td><input type="text" name="warna"><br></td>
            </tr>
            <tr>
                <td>Jumlah Kaki</td>
                <td> : </td>
                <td><input type="number" name="kaki" id=""></td>
            </tr>
            <tr>
                <td></td><td></td>
                <td><input type="submit" name="submit" value="Masuk">
                    <input type="reset" name="reset" value="Hapus"></td>
            </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $warna = $_POST['warna'];
    $kaki = $_POST['kaki'];

    class kucing
    {
        public $warna;
        public $kaki;

        public function kucingg($warna, $kaki)
        {
            if ($kaki == 4) {
                echo "Berwarna : " . $warna . "<br>";
                echo "Berkaki : " . $kaki . "<br>";
                echo "Ket : Normal";
            }
        }

    }
    $kucing = new kucing();
    echo $kucing->kucingg($warna, $kaki);
}