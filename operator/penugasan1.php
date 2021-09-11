<?php
$uang = 100000;
 echo "Uang ucup = $uang<br>";
 echo "<hr>";

 $air = 15000;
 $uang -= $air;
  echo "Dibelikan air minum $air<br>";
  echo "Sisa uang ucup beli minum = $uang<br>";
  echo "<hr>";

  $sosis = 25000;
  $uang -= $sosis;
  echo "Dibelikan sosis bakar $sosis<br>";
  echo "Sisa uang Ucup jajan sosis bakar + minum $uang";
  echo "<hr>";

  $sedekah = 0.1 * $uang;
  $uang -= $sedekah;
  echo "Sedekah ke musafir 10% dari <b>54000</b> yaitu sebesar <b>$sedekah</b>";
  echo "<br>sisa uang ucup = <b>$uang</b>";
  echo "<hr>";

  $nemuUang = $uang * 0.5;
  echo "nemu uang dijalan 50% dari sisa uang ucup <b>$uang</b> yaitu nemu uang sebesar <b>$nemuUang</b>";
  echo "<br>sisa uang ucup sekarang = <b>$nemuUang + $uang</b>";
  echo "<hr>";

  $uang += $nemuUang;
  echo "total uang ucup adalah <b>Rp. $uang</b>"
  ?>




  


