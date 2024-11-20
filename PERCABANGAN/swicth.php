<?php 

$level = 7;

switch($level){
    case 1:
        echo "Pelajari HTML";
        break;
    case 2:
        echo "Pelajari CSS";
        break;
    case 3:
        echo "Pelajari Javascript";
        break;
    case 4:
        echo "Pelajari PHP";
        break;
    case 5:
        echo "Pelajari Laravel";
        break;
    default:
        echo "Kamu bukan programmer!WATIR IH MATAK BELAJAR :p";
}

echo "<hr>";

$lampu = "abu";
switch ($lampu) {
    case 'hijau':
        echo "Silahkan Jalan";
        break;
    case 'kuning':
        echo "Siapkan Kendaraan Anda";
        break;
    case 'merah':
        echo "Berhenti";
        break;
    default:
        echo "Warna Yang Anda Masukan Salah :((((((";
        break;
}

?>