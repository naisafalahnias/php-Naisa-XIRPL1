<?php

$siswa = [
    [
        "nis" => 1001,
        "nama" => "Haddad",
        "kelas" => "XI RPL 3",
        "ekskul" => [
            "tari" => "Seni tari",
            "karawitan" => "Karawitan",
            "futsal" => "Futsal"
        ]
    ],
    [
        "nis" => 1002,
        "nama" => "Sandi",
        "kelas" => "XI RPL 1",
        "ekskul" => "Futsal"
    ]
];

foreach ($siswa as $murid) {
    echo "NIS : " . $murid["nis"] . "<br>";
    echo "Nama : " . $murid["nama"] . "<br>";
    echo "Kelas : " . $murid["kelas"] . "<br>";

    echo "Ekskul : <ul>";

    foreach ((array) $murid["ekskul"] as $namaEkskul) {
        echo "<li>" . $namaEkskul . "</li>";
    }

    echo "</ul><br><hr>";
}

?>


