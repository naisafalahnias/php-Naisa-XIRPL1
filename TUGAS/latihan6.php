<?php 

$novel = [
    [
        "judul" => "Dilan 1991",
        "penulis" => "Pidi bala",
        "tanggal_rilis" => "20 November 2024",
        "penerbit" => "Airlangga"
    ],
    [
        "judul" => "Hujan",
        "penulis" => "Tere liye",
        "tanggal_rilis" => "22 september 2023",
        "penerbit" => "Gramedia Pustaka Utama"
    ],
    [
        "judul" => "Pulang",
        "penulis" => "Tere liye",
        "tanggal_rilis" => "19 mei 2016",
        "penerbit" => "Republika Penerbit"
    ],
    [
        "judul" => "Laut bercerita",
        "penulis" => "Leila S. Chudori",
        "tanggal_rilis" => "01 November 2022",
        "penerbit" => "Kepustakaan Populer Gramedia (KPG) "
    ],
    [
        "judul" => "Danur",
        "penulis" => "Risa Saraswati",
        "tanggal_rilis" => "02 agustus 2019",
        "penerbit" => "Bukune"
    ]
];

foreach($novel as $buku) {
    echo "Judul : ".$buku["judul"]."<br>";
    echo "Penulis : ".$buku["penulis"]."<br>";
    echo "Tanggal rilis : ".$buku["tanggal_rilis"]."<br>";
    echo "Penerbit : ".$buku["penerbit"];
    echo "<hr>";

}

?>