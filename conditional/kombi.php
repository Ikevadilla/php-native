<?php
    $nilai = 85;
    $nilaib = 80;
    $akademik = $nilai < 84;
    $atletik = $nilaib < 83;
    $jawab = $nilai >= 85 && $nilaib >=83

     ? "Lulus" : "Tidak Lulus";
    echo "Nilai Akademik : $nilai ";
    echo "<br> Nilai Atletik : $nilaib";
    echo "<br> Dinyatakan : $jawab";

    ?>