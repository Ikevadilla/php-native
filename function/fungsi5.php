<?php
//membuat fungsi
function hitungUmur($thn_lahir,$thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalkan($nama, $salam = "Assalamualaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    //memanggil fungsi lain
    echo "Saya berusia " . hitungUmur(1998, 2021) . "tahun<br/>";
    echo "Senang berkelanan dengan anda<br/>";
}
    echo perkenalkan("ike");
    ?>