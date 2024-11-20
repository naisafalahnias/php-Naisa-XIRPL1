<?php

// class induk
class kendaraan{
    // property
    public $warna = "Biru";
    // method
    public function a(){
        echo "Saya adalah kendaraan";
    }
}

// class anak
    class mobil extends kendaraan{

        public function b(){
            echo $this->a();
            echo "<br>";
            echo "Warna saya adalah $this->warna";
        }
    }

//object
$cetak = new mobil();
echo $cetak->b();