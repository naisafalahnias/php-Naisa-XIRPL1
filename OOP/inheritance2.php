<?php

// class induk
class bangun_datar{

    public $luas_persegi;
    public $luas_persegi_panjang;
    public $luas_segitiga;
    public $luas_lingkaran;

    public $kel_persegi;
    public $kel_persegi_panjang;
    public $kel_segitiga;
    public $kel_lingkaran;
}

    //class anak  
    class luas extends bangun_datar{

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
            echo "<hr>";
        }
    }


    class keliling extends bangun_datar{

        public function persegi($s) {
            echo "<h3>Menghitung Keliling Persegi</h3>";
            echo "Sisi persegi : $s <br>";
            echo "Rumus : 4 x s <br>";
            $this->kel_persegi = 4 * $s;
            echo "Hasilnya : $this->kel_persegi";
        }

        public function persegi_panjang($p,$l) { 
            echo "<h3>Menghitung Keliling Persegi Panjang</h3>";
            echo "Panjang : $p <br>";
            echo "Lebar : $l <br>";
            echo "Rumus : 2 x (p + l) <br>";
            $this->kel_persegi_panjang =2 * ($p + $l);
            echo "Hasilnya : $this->kel_persegi_panjang";
        }

        public function segitiga($sisi_a,$sisi_b,$sisi_c) {
            echo "<h3>Menghitung Keliling Segitiga</h3>";
            echo "Sisi a : $sisi_a <br>";
            echo "Sisi b : $sisi_b <br>";
            echo "Sisi c : $sisi_c <br>";
            echo "Rumus : a + b + c <br>";
            $this->kel_segitiga = $sisi_a + $sisi_b + $sisi_c;    
            echo "Hasilnya : $this->kel_segitiga";
        }

        public function lingkaran($r) {
            echo "<h3>Menghitung Keliling Lingkaran</h3>";
            echo "Jari-jari = $r <br>";
            echo "Rumus : 2 x 3,14 x r  <br>";
            $this->kel_lingkaran =2 * 3.14 * $r;
            echo "Hasilnya : $this->kel_lingkaran";
        }
    }


$cetak1 = new luas();

echo "<h1><u>LUAS BANGUN DATAR</u></h1>";
echo $cetak1->persegi(10);
echo "<br><hr>";
echo $cetak1->persegi_panjang(10,15);
echo "<br><hr>";
echo $cetak1->segitiga(8,10);
echo "<br><hr>";
echo $cetak1->lingkaran(12);

$cetak2 = new keliling();

echo "<h1><u>KELILING BANGUN DATAR</u></h1>";
echo $cetak2->persegi(10);
echo "<br><hr>";
echo $cetak2->persegi_panjang(10,15);
echo "<br><hr>";
echo $cetak2->segitiga(5,10,5);
echo "<br><hr>";
echo $cetak2->lingkaran(12);


?>
