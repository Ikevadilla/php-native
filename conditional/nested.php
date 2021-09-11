<?php
$sim = "Ya";
$stnk = "Tidak";

//Penggecekan kelengkapan surat kendaraan
if ($sim == "Ya"){
    if ($stnk == "Ya") {
        echo "Selamat menjalankan aktivitas hati hati berkendara";
    }else {
        echo "Maaf anda kami tilang!";
    }
}else {
    echo "Maaf anda kami tilang!";
}