<?php
   $tahun = date ('Y');
   $Kabisat = $tahun % 4 == 0;
   $jawab = $Kabisat ? " iya " : "Bukan Tahun Kabisat";
   echo $tahun. "<br>";
   echo "Tahun Kabisat :" .$jawab;
   echo "<br>";
   ?>