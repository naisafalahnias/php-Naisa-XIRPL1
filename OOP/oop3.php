<?php

class bangun_datar{

    public $luas_persegi;
    public $luas_persegi_panjang;
    public $luas_segitiga;
    public $luas_lingkaran;

    public function persegi($s) {
        echo "<h3>Menghitung Luas Persegi</h3>";
        echo "Sisi persegi : $s <br>";
        echo "Rumus : s x s <br>";
        $this->luas_persegi = $s * $s;
        echo "Hasilnya : $this->luas_persegi";
    }

    public function persegi_panjang($p,$l) { 
        echo "<h3>Menghitung Luas Persegi Panjang</h3>";
        echo "Panjang : $p <br>";
        echo "Lebar : $l <br>";
        echo "Rumus : p x l <br>";
        $this->luas_persegi_panjang = $p * $l;
        echo "Hasilnya : $this->luas_persegi_panjang";
    }

    public function segitiga($a,$t) {
        echo "<h3>Menghitung Luas Segitiga</h3>";
        echo "Alas : $a <br>";
        echo "Tinggi : $t <br>";
        echo "Rumus : 1/2 x a x t <br>";
        $this->luas_segitiga = 1/2 * $a * $t;    
        echo "Hasilnya : $this->luas_segitiga";
    }

    public function lingkaran($r) {
        echo "<h3>Menghitung Luas Lingkaran</h3>";
        echo "Jari-jari = $r <br>";
        echo "Rumus : 3,14 x r x r <br>";
        $this->luas_lingkaran = 3.14 * $r;
        echo "Hasilnya : $this->luas_lingkaran";
    }
}

$cetak = new bangun_datar();

echo $cetak->persegi(10);
echo "<br><hr>";
echo $cetak->persegi_panjang(10,15);
echo "<br><hr>";
echo $cetak->segitiga(8,10);
echo "<br><hr>";
echo $cetak->lingkaran(12);



?>
