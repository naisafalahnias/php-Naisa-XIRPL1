<?php

function persegi($s) {
    echo "<h3>Menghitung Luas Persegi</h3> <br>";
    echo "Sisi persegi : $s <br>";
    echo "Rumus : s x s <br>";
    $hasil = $s * $s;
    echo "Hasilnya : $hasil";
}

function persegi_panjang($p,$l) {
    echo "<h3>Menghitung Luas Persegi Panjang</h3> <br>";
    echo "Panjang : $p <br>";
    echo "Lebar : $l <br>";
    echo "Rumus : p x l <br>";
    $hasil = $p * $l;
    echo "Hasilnya : $hasil";
}

function segitiga($a,$t) {
    echo "<h3>Menghitung Luas Segitiga</h3> <br>";
    echo "Alas : $a <br>";
    echo "Tinggi : $t <br>";
    echo "Rumus : 1/2 x a x t <br>";
    $hasil = 1/2 * $a * $t;
    echo "Hasilnya : $hasil";
}

function lingkaran($r) {
    echo "<h3>Menghitung Luas Lingkaran</h3> <br>";
    echo "Jari-jari = $r <br>";
    echo "Rumus : 3,14 x r x r <br>";
    $hasil = 3.14 * $r;
    echo "Hasilnya : $hasil";
}

persegi(10);
echo "<br><hr>";
persegi_panjang(10,15);
echo "<br><hr>";
segitiga(8,10);
echo "<br><hr>";
lingkaran(12);



?>
