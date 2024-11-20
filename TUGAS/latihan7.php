<?php

$daftar = [
    [
        "nama" => "Safitri",
        "daftar_buah" => 
        [
            "buah1" => 
            [
                "jenis_buah"  => "Anggur",
                "varian" => 
                [
                    "Anggur ijo",
                    "Anggur putih"
                ]
            ]
        ]
    ],
    [
        "nama" => "Rahman",
        "daftar_buah" => 
        [
            "buah1" => 
            [
                "jenis_buah"  => "Alpukat",
                "varian" => 
                [
                    "Alpukat mentega",
                    "Alpukat biasa"
                ]
            ],
            "buah2" => 
            [
                "jenis_buah"  => "Apel",
                "varian" =>  
                [
                    "Apel merah",
                    "Apel hijau"
                ]
            ]
        ]
    ]
];

foreach ($daftar as $data) {
    echo "Nama Pemilik : " . $data["nama"] . "<br>";
    echo "Daftar Buah Kesukaan : <ul>";

    foreach ($data["daftar_buah"] as $buah) {
        echo "<li>" . $buah["jenis_buah"] . "<ul>";

        foreach ($buah["varian"] as $varian) {
            echo "- $varian <br>";
        }

        echo "</ul></li>";
    }

    echo "</ul><br><hr>";
}
?>
