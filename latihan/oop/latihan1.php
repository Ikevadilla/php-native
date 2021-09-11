<?php
//mengdefinisikan sebuah class
class komputer
{

    //membuat property atau attributes
    public $pemilik ="Ike";
    public $merk ="lenovo";
    public $ukuranlayar ="4";
    public $jeniskomputer ="bisa dinyalakan dan dimatikan";

    //membuat method (behaviour /)
    public function dinyalakan()
    {
        return "menyala";
    }
    public function dimatikan()
    {
        return "mati";
    }

}
//membuat object 
$komputer1 = new komputer ();
echo "pemilik komputer : " . $komputer1->pemilik . "<br>";
echo "merk komputer : " . $komputer1->merk . "<br>";
echo "laptop akan dimatikan atau dinyalakan : " .$komputer1->dinyalakan() . "<hr>";

$komputer2 = new komputer();
$komputer2->pemilik = "ike";
$komputer2->merk ="lenovo";
$komputer2->ukuranlayar ="16 inci";
echo "pemilik : " . $komputer2->pemilik . "<br>";
echo "merk komputer : " . $komputer2->merk . "<br>";
echo "laptop akan dimatikan atau dinyalakan : " .$komputer2->dimatikan() . "<hr>";

$komputer3 = new Komputer ();
$komputer3->pemilik = "vadil";
$komputer3->merk ="asus";
$komputer3->ukuranlayar ="16 inci";
echo "pemilik : " . $komputer2->pemilik . "<br>";
echo "merk komputer : " . $komputer3->merk . "<br>";
echo "laptop akan dimatikan atau dinyalakan : " .$komputer3->dinyalakan() . "<hr>";

$komputer4 = new Komputer ();
$komputer4->pemilik = "dila";
$komputer4->merk ="acer";
$komputer4->ukuranlayar ="16 inci";
echo "pemilik : " . $komputer4->pemilik . "<br>";
echo "merk komputer : " . $komputer4->merk . "<br>";
echo "laptop akan dimatikan atau dinyalakan : " .$komputer4->dimatikan() . "<hr>";

$komputer5 = new Komputer ();
$komputer5->pemilik = "raraw";
$komputer5->merk ="hp";
$komputer5->ukuranlayar ="16 inci";
echo "pemilik : " . $komputer5->pemilik . "<br>";
echo "merk komputer : " . $komputer5->merk . "<br>";
echo "laptop akan dimatikan atau dinyalakan : " .$komputer5->dinyalakan() . "<hr>";
?>