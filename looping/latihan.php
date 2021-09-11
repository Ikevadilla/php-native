<?php

echo "No 1";
echo "<br>";
$i = 2;
do {
    echo "$i ";
    $i *=2;
}while ($i <= 128);
echo "<br></br>";
echo "<hr>";

echo "No 2";
echo "<br>";

$i = 3125; 
do { 
 echo "$i "; 
 $i /=5;
} while ($i >= 5); 
echo "<br></br>";
echo "<hr>";

echo "No 3";
echo "<br>";
$books = [
    18,45,29,61,47,34,
];
foreach ($books as $buku) {
    $sisabagi =$buku % 3;
    echo "$buku %3 = $sisabagi<br>";
    echo "<hr>";
}

echo "No 4";
echo "<br>";
$s =5;
    for($a=$s;$a>0;$a--){
    for($b=$s;$b>=$a;$b--){
        echo "*";
    }
    echo "<br>";
    }

    echo "No 5";
echo "<br>";
$s =5;
    for($a=$s;$a>0;$a--){
    for($b=$s;$b>=$a;$b--){
        echo ""
        echo "*";
    }
    echo "<br>";
    }
?>