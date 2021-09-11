<?php

function LuasSegitiga($a, $b)
{
    $alas = $a;
    $tinggi = $b;
    $luas = ($alas * $tinggi) / 2;
    return $luas;
}
echo "Luas Segitiga : " . LuasSegitiga(10, 8);