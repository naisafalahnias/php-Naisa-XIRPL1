<?php

$novel = '[
    {
        "no": "001",
        "judul": "Romeo Juliet",
        "genre": "Romance",
        "penulis": "William Shakespeare",
        "penerbit": "Buku Bijak",
        "tahunrilis": "2020"
    },
    {
        "no": "002",
        "judul": "Rama dan Sinta",
        "genre": "Romance",
        "penulis": "Pitoyo Amrih",
        "penerbit": "Pitoyo Amrih",
        "tahunrilis": "2019"
    },
    {
        "no": "003",
        "judul": "Laut Bercerita",
        "genre": "historical fiction",
        "penulis": "Leila S. Chudori",
        "penerbit": "Kepustakaan Populer Gramedia (KPG)",
        "tahunrilis": "2017"
    },
    {
        "no": "004",
        "judul": "Perempuan Batih",
        "genre": "Sastra",
        "penulis": "A.R. Rizal",
        "penerbit": "Laksana",
        "tahunrilis": "2018"
    },
    {
        "no": "005",
        "judul": "Angin Pertama",
        "genre": "Sastra",
        "penulis": "Kim Al Ghozali AM",
        "penerbit": "Basabasi",
        "tahunrilis": "2020"
    },
    {
        "no": "006",
        "judul": "Asteroid dari Namamu",
        "genre": "Sastra",
        "penulis": "Galeh Pramudianto",
        "penerbit": "Basabasi",
        "tahunrilis": "2019"
    },
    {
        "no": "007",
        "judul": "Hujan",
        "genre": "Romance",
        "penulis": "Tere liye",
        "penerbit": "Gramedia Pustaka Utama",
        "tahunrilis": "2016"
    },
    {
        "no": "008",
        "judul": "Pulang",
        "genre": "Action",
        "penulis": "Tere Liye",
        "penerbit": "Republika Penerbit",
        "tahunrilis": "2018"
    },
    {
        "no": "009",
        "judul": "Kita, Kata, Cinta",
        "genre": "Romance",
        "penulis": "Khrisna Pabichara",
        "penerbit": "Diva Press",
        "tahunrilis": "2019"
    },
    {
        "no": "010",
        "judul": "Jalan Udara",
        "genre": "Petualang",
        "penulis": "Boris Pasternak",
        "penerbit": "Basabasi",
        "tahunrilis": "2019"
    },
    {
        "no": "011",
        "judul": "Cantik Itu Luka",
        "genre": "Fiksi",
        "penulis": "Eka Kurniawan",
        "penerbit": "Gramedia Pustaka Utama",
        "tahunrilis": "2018"
    },
    {
        "no": "012",
        "judul": "Cerita-cerita Bahagia Hampir Seluruhnya",
        "genre": "Romance",
        "penulis": "Norman Erikson Pasaribu",
        "penerbit": "Gramedia Pustaka Utama",
        "tahunrilis": "2022"
    },
    {
        "no": "013",
        "judul": "Kita Pergi Hari Ini",
        "genre": "Fantasi",
        "penulis": "Ziggy Zezsyazeoviennazabrizkie",
        "penerbit": "Gramedia Pustaka Utama",
        "tahunrilis": "2021"
    },
    {
        "no": "014",
        "judul": "The Star and I",
        "genre": "Romance",
        "penulis": "Ilana Tan",
        "penerbit": "Gramedia Pustaka Utama",
        "tahunrilis": "2021"
    },
    {
        "no": "015",
        "judul": "Bibi Gill",
        "genre": "Fiksi",
        "penulis": "Tere liye",
        "penerbit": "PENERBIT SABAK GRIP",
        "tahunrilis": "2022"
    },
    {
        "no": "016",
        "judul": "Layangan Putus",
        "genre": "Romance",
        "penulis": "MOMMY ASF",
        "penerbit": "Rdm Publishers",
        "tahunrilis": "2010"
    },
    {
        "no": "017",
        "judul": "Heartbreak Motel",
        "genre": "Romance",
        "penulis": "Ika Natassa",
        "penerbit": "Ika Natassa",
        "tahunrilis": "2022"
    },
    {
        "no": "018",
        "judul": "Home Sweet Loan",
        "genre": "Metropop",
        "penulis": "Almira Bastari",
        "penerbit": "Gramedia Pustaka Utama",
        "tahunrilis": "2022"
    },
    {
        "no": "019",
        "judul": "Perahu Kertas",
        "genre": "Fiksi",
        "penulis": "Dewi Lestari",
        "penerbit": "reudee Pustaka dan Bentang Pustaka",
        "tahunrilis": "2010"
    },
    {
        "no": "020",
        "judul": "London Love Story",
        "genre": "Romance",
        "penulis": "Tisa TS",
        "penerbit": "Loveable",
        "tahunrilis": "2015"
    }
    
]';

$list = json_decode($novel);

echo "<center>";
echo "<h1><u>Kumpulan Novel Terbaru</u></h1><br>";

echo "<table border='1' cellspacing='0' cellpadding='2'>";
echo "<tr style='background-color: #ffcccb;'>
        <th>No.</th>
        <th>Judul</th>
        <th>Genre</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Rilis</th>
      </tr>";

foreach ($list as $buku) {
    echo "<tr>
            <td>{$buku->no}</td>
            <td>{$buku->judul}</td>
            <td>{$buku->genre}</td>
            <td>{$buku->penulis}</td>
            <td>{$buku->penerbit}</td>
            <td>{$buku->tahunrilis}</td>
          </tr>";
}
echo "</table>";

?>