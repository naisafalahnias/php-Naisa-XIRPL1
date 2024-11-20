<?php

// data json
$dataJSON = '[ 
    {
        "nama" : "Nurul Huda",
        "alamat" : "Bandung"
    },
    {
        "nama" : "Reza Ilham Risqi",
        "alamat" : "Jakarta"
    }
]';

// dikonversikan ke JSON
$list = json_decode($dataJSON);

// tampilkan datanya
foreach($list as $mahasiswa) {
    echo "Nama : {$mahasiswa->nama} <br>";
    echo "Alamat : {$mahasiswa->alamat} <br>";
    echo "<hr>";

}

?>