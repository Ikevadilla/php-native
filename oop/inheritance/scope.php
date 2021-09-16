<?php
//buat class komputer
class komputer
{
    public function lihat_spec()
    {
        return "Spec Komputer : Acer, Processor Intel core i7, Ram 4GB";
    }
}

//turunkan class komputer
class laptop extends komputer
{

    public function lihat_spec()
    {
        return "spec laptop : Asus, Processor Intel core i5, Ram 2GB";
    }
}

//buat objek dari class laptop (instansiasi)
$gadget_baru = new laptop();

//panggil method lihat_spec()
echo $gadget_baru->lihat_spec();
