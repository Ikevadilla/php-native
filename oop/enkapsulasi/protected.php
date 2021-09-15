<?php
class laptop
{
    public $pemilik;

    public function hidupkanLaptop()
    {
        return "Hidupkan Laptop";
    }
    public function paksaHidupkanLaptop()
    {
        return $this->hidupkanLaptop();
    }
}

$laptopAnto = new Laptop();
$laptopAnto->$pemilik = "Anto";

echo $laptopAnto->pemilik;
echo $laptopAnto->hidupkanLaptop();
