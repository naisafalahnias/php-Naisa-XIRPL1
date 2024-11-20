<?php

$siswa = [
    [
     "nama" => "Naisa",
     "jenis_kelamin" => "Perempuan",
     "kelas" => "XI RPL 1"
    ],
    [
     "nama" => "Karrisa",
     "jenis_kelamin" => "Perempuan",
     "kelas" => "XI RPL 2"
    ],
];

foreach($siswa as $murid) {
    echo "Nama : ".$murid["nama"]."<br>";
    echo "Jenis kelamin : ".$murid["jenis_kelamin"]."<br>";
    echo "Kelas : ".$murid["kelas"];
    echo "<hr>";
}

?>