<?php
//buat class komputer
class komputer {
    //buat constructor class komputer
    public function_construct() {
        echo "Constructor class komputer <br />"; 
    }
    //buat destructor class komputer
    public function_destruct() {
        echo "Destructor dari class komputer <br />";
    }
}
    //turunkan class komputer ke laptop
    class laptop extends komputer {
    }
    //turunkan class laptop ke choromebook 
    class choromebook extends laptop {
    }
    //buat objek dari class choromebook (instansiasi)
    $gadget_baru = new choromebook();
    echo "Belajar OOP PHP <br />";
    ?>