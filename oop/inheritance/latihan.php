<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>makhluk</title>
</head>
<body>
    <fieldset>
        <legend>jenis makhluk </legend>
        <form action="" method="post">
            <table>
            <tr>
        <td> Pilih makhluk :
        <select name="jenis" required>
        <option value="">Pilih</option>
        <option value="1">manusia</option>
        <option value="2">malaikat</option>
        <option value="3">jin</option>
        <option value="4">setan</option>
        </select> <br></td>
            </tr>
            <tr>
                <td><input type="submit" name="proses" value="proses">
            </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>

<?php
if (isset($_POST['proses'])) {
    $jenis = $_POST['jenis'];

    class makhluk 
    {
        public $jenis;
        public function __construct()
        {
            echo "tugasnya beribadah kepada tuhan <br/>";
        }

        // turunkan class manusia ke malaikat 
    class malaikat extends manusia
{
    public function __construct()
    {
        parent::__construct();
        echo "Constructor dari class manusia <br />";
    }
}

    }
    public function __construct()
    {
        parent::__construct();
        echo "Constructor dari class manusia <br />";
    }

// turunkan class laptop ke chromebook
class jin extends malaikat
{
    public function __construct()
    {
        parent::__construct();
        echo "Constructor dari class malaikat <br />";
    }

// buat objek dari class chromebook (instansiasi)
$gadget_baru = new setan();
?>