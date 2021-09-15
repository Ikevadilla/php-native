<?php
class komputer
{
    protected $jenisProcessor = "Intel core 17";

    protected funtion tampilkanJenisprocessor()
    {
        return $this->jenisProcessor;
    }
}

class Laptop extends komputer
{
    public function getProcessor()
    {
        return $this->tampilkanJenisprocessor();
    }
}

$laptop = new Laptop()
echo $laptop->getProcessor();