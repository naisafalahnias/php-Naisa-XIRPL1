<?php

class kucing{

    public function __construct() {
        echo "HAII aku kucinggg... <br>"; 
    }

    public function makan() {
        echo "Kucing suka makan royalecanin";
    }

    public function minum() {
        echo "Kucing suka minum susu";
    }

    public function __destruct() {
        echo "Suara meng *miawwwwwwuuu ngok* <br>"; 
    }

}

$cetak = new kucing();

// echo $cetak->makan();
// echo "<br>";    
// echo $cetak->minum();
// echo "<br>";

