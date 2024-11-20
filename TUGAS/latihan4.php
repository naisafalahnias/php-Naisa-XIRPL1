<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Nilai Ujian Nasional</h1>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="" value=""></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" id="" value=""></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan" id="">
                            <option value="RPL">RPL</option>
                            <option value="TKRO">TKRO</option>
                            <option value="TBSM">TBSM</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><h3>Nilai ujian</h3></td>
                </tr>
                <tr>
                    <td>Nilai Bahasa Indonesia</td>
                    <td>:</td>
                    <td><input type="number" name="bhs_indo" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Inggris</td>
                    <td>:</td>
                    <td><input type="number" name="bhs_inggris" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td>:</td>
                    <td><input type="number" name="mtk" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Produktif</td>
                    <td>:</td>
                    <td><input type="number" name="produktif" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" id="" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php

if (isset($_POST['proses'])) {
    $nama1 = $_POST['nama'];
    $kelas1 = $_POST['kelas'];
    $jurusan1 = $_POST['jurusan'];
    $indo = $_POST['bhs_indo'];
    $inggris = $_POST['bhs_inggris'];
    $mtk1 = $_POST['mtk'];
    $produktif1 = $_POST['produktif'];
    $rata_rata = $indo + $inggris + $mtk1 + $produktif1;
    $hasil_akhir = $rata_rata / 4;

    echo "<center><br><br><hr>";
    echo "<h2> Hasil Ujian </h2>";
    echo "<table border='0' cellpadding='15' cellspasing='0'>";
    echo "<tr><td>Nama</td><td>:</td><td>$nama1</td></tr>";
    echo "<tr><td>Kelas</td><td>:</td><td>$kelas1</td></tr>";
    echo "<tr><td>Jurusan</td><td>:</td><td>$jurusan1</td></tr>";
    echo "<tr><td>Nilai B. Indonesia</td><td>:</td><td>$indo</td></tr>";
    echo "<tr><td>Nilai B. Inggris</td><td>:</td><td>$inggris</td></tr>";
    echo "<tr><td>Matematika</td><td>:</td><td>$mtk1</td></tr>";
    echo "<tr><td>Produktif</td><td>:</td><td>$produktif1</td></tr>";
    echo "<tr><td>Rata-rata</td><td>:</td><td>$hasil_akhir</td></tr>";
    echo "<tr><td>Status</td><td>:</td><td>" . ($hasil_akhir >= 75 ? "Tuntas" : "Belum Tuntas") . "</td></tr>";
    echo "</table>";
}
?>
