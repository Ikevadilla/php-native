<?php
class OrangTua
{
    protected $noAtm = "1111-2222-3333-4444";
    private $pinAtm = "001122";

    public function noAtm()
    {
        return $this->noAtm;
    }
    public function pinAtm()
    {
        return $this->pinAtm;
    }
}

class anak extends orangtua
{
    public function noAtm()
    {
        return $this->noAtm;
    }
    public function pinAtm()
    {
        return $this->pinAtm;
    }
}
$orangTua = new OrangTua();
$anak = new Anak();

//ingim mengetahui data dari object orang tua
echo "No kartu ATM : " . $orangTua->noAtm() . "<br>";
echo "Pin ATM : " . $anak->pinAtm();
