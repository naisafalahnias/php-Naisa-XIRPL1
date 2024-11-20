<?php
 
 $nama = "Yeonjun";
 $js = "Laki-laki";
 $jenis = "Makanan";
 $menu = "Ayam goreng";
 $jumlah = 1;
 
 $harga = 0;
 
 echo "<b>~~ RESTORAN SELALU RAME ~~</b><br>";
 echo "------------------------------------------------- <br><br>";
 echo "Nama : $nama<br>";
 echo "Jenis kelamin : $js<br>";
 echo "Jenis : $jenis<br>";
 
 if ($jenis == "Makanan") {
     if ($menu == "Nasi goreng") {
         $harga = 10000;
     } elseif ($menu == "Mie goreng") {
         $harga = 15000;
     } elseif ($menu == "Ayam goreng") {
         $harga = 20000;
     } else {
         echo "Makanan tidak tersedia<br>";
     }
 } elseif ($jenis == "Minuman") {
     if ($menu == "Air mineral") {
         $harga = 5000;
     } elseif ($menu == "Fresh tea") {
         $harga = 10000;
     } elseif ($menu == "Jus") {
         $harga = 12000;
     } else {
         echo "Minuman tidak tersedia<br>";
     }
 } else {
     echo "Jenis tidak tersedia<br>";
 }
 
 if ($harga > 0) {
     $totalPesanan = $harga * $jumlah;
     echo "Menu : $menu<br>";
     echo "Harga : Rp. $harga<br>";
     echo "Jumlah : $jumlah<br><br>";
     echo "------------------------------------------------- <br>";
     echo "Total : Rp. $totalPesanan<br>";
 
     if ($totalPesanan > 50000) {
         $diskon = $totalPesanan * 0.20;
         $totalBayar = $totalPesanan - $diskon;
         echo "Diskon 20% : Rp. $diskon<br>";
     } else {
         $diskon = 0;
         $totalBayar = $totalPesanan; 
     }
 
     echo "------------------------------------------------- <br>";
     echo "Total Bayar : Rp. $totalBayar<br>";
 }



    
?>