<?php

$nama = "Naisafalah Anggunniatuty";
$kelas = "XI RPL 1";

$indo = 100;
$inggris = 100;
$mtk = 100;
$produktif = 100;
$semua_nilai = $indo + $inggris + $mtk + $produktif;
$hasil_akhir = $semua_nilai / 4;


echo "<b>";
echo "Nama : $nama";
echo "<br>";
echo "Kelas : $kelas";
echo "<br>";
echo "Nilai B.indonesia : $indo";
echo "<br>";
echo "Nilai B.inggris : $inggris";
echo "<br>";
echo "Matematika : $mtk";
echo "<br>";
echo "Produktif : $produktif";
echo "<br>";
echo "Rata-rata : $hasil_akhir";
echo "<br><hr>";



$hasiltes = $hasil_akhir > 75;
 
if($hasiltes == $hasil_akhir){
    echo "Status : *Anda Lulus!*";
} else {
    echo "Status : *Anda Tidak Lulus!*";  
}

echo "</b>";

?>