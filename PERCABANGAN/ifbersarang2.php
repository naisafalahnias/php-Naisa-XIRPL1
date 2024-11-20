<?php

$provinsi = "Jawa Barat";
$kota = "Depok";

if($provinsi == "Jawa Barat"){

    echo "SELAMAT DATANG DI PROVINSI JAWA BARAT!!<br>";

    if($kota == "Bandung"){
        echo "*Selamat Datang Dikota Bandung*";
    } elseif($kota == "Cimahi"){
        echo "*Selamat Datang Dikota Cimahi*";
    } elseif($kota == "Bogor"){
        echo "*Selamat Datang Dikota Bogor*";
    } elseif($kota == "Bekasi"){
        echo "*Selamat Datang Dikota Bekasi*";
    } elseif($kota == "Depok"){
        echo "*Selamat Datang Dikota Depok*";
    } else {
        echo "Kota tidak tersedia";
    }

} elseif($provinsi == "Jawa Timur"){

    echo "SELAMAT DATANG DI PROVINSI JAWA TIMUR!!<br>";

    if($kota == "Banyuwangi"){
        echo "*Selamat Datang Dikota Banyuwangi*";
    } elseif($kota == "Surabaya"){
        echo "*Selamat Datang Dikota Surabaya*";
    } elseif($kota == "Bojonegoro"){
        echo "*Selamat Datang Dikota Bojonegoro*";
    } elseif($kota == "Blitar"){
        echo "*Selamat Datang Dikota Blitar*";
    } elseif($kota == "Malang"){
        echo "*Selamat Datang Dikota Malang*";
    } else {
        echo "Kota tidak tersedia";
    }

} elseif($provinsi == "Jawa Tengah"){

    echo "SELAMAT DATANG DI PROVINSI JAWA TENGAH!!<br>";

    if($kota == "Solo"){
        echo "*Selamat Datang Dikota Solo*";
    } elseif($kota == "Semarang"){
        echo "*Selamat Datang Dikota Semarang*";
    } elseif($kota == "Purwokerto"){
        echo "*Selamat Datang Dikota Purwokerto*";
    } elseif($kota == "Banyumas"){
        echo "*Selamat Datang Dikota Banyumas*";
    } elseif($kota == "Banjarnegara"){
        echo "*Selamat Datang Dikota Banjarnegara*";
    } else {
        echo "Kota tidak tersedia";
    }

} else {
    echo "Provinsi tidak tersedia";
} 

?>