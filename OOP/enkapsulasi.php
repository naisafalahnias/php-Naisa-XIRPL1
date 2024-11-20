<?php

class contoh{

    public $nama = "Naisa";
    // private $nama = "Naisa"; (kalo private)

    public function perkenalan() {
        echo " Assalamu'alaikum <br>";
        // echo $this->nama;(kalo si property nya private)
    }
}

$cetak = new contoh();

echo $cetak->perkenalan();
echo $cetak->nama;