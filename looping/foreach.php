<?php
$book = [
    "Panduan Belajar PHP untuk pemula",
    "Membangun aplikasi web dengan php",
    "Tutorial PHP dan Mysql",
    "Membuat chat bot dengan PHP",
];

echo "<h5>Judul Buku PHP:</h5>";
echo "<ul>";
foreach ($books as $buku) {
    echo "<li>$buku</li>";
}
echo "</ul>";
?>