<?php
class Raport
{
    protected $nama = "Ike Vadila";
    private $nilai = "50";
    public $peringkat = "5";

    public function raport()
    {
        $a = $this->nama;
        $b = $this->nilai;
        if ($a == "Ike vadila" && $b == "50") {
            $c = "Peringkat tertinggi";
        }
        return $c;
    }

    public function info()
    {
        $a = $this->nama;
        $b = $this->nilaii;
        $d = $this->nama;
        $c = "nama : " . $a . "<br>" . " Pemilik : " . $d;
        return $c;
    }
    $nama = new Raport();

echo $nama->info() . "<br>";
echo "peringkat : " . $nama->raport(
