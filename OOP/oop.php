<?php
//buat class
class kucing {
    // buat property atau atribut
    var $warna;
    var $jenis;

    // method/function
    public function makan() {
        echo "Kucing suka makan royalecanin";
    }

    public function minum() {
        echo "Kucing suka minum susu";
    }

}

// buat objek
$cetak = new kucing();//instansiasi

// memanggil method
echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
echo "<br>";

// memanggil property
echo $cetak->warna = "Kuning";
echo "<br>";
echo $cetak->jenis = "Persia";

