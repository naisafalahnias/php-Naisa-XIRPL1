<?php

// membuat array asosiatif
$artikel = [
    "judul" => "Belajar Pemrograman PHP",
    "penulis" => "petanicode",
    "view" => 128,
    "tanggal" => "20 juni 2005"
];

// mencetak isi array asosiatif
echo "<p>".$artikel["judul"]."</p>";
echo "<p>".$artikel["penulis"]."</p>";
echo "<p>".$artikel["view"]."</p>";
echo "<p>".$artikel["tanggal"]."</p>";

?>