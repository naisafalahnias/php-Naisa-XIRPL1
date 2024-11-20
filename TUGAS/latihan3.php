<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <img src="smklogowel.png" alt="" width="300">
        <h2>Form Biodata Diri</h2>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="" value=""></td>
                </tr>
                <tr>
                    <td>Tempat lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat_lahir" id="" value=""></td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" id="" value=""></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="js" id="" value="Laki-laki">Laki-laki
                        <input type="radio" name="js" id="" value="Perempuan">Perempuan
                    </td>
                    
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id=""></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Ateis">Ateis</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan terakhir</td>
                    <td>:</td>
                    <td>
                        <select name="pendidikan_terakhir" id="">
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMK">SMK</option>
                            <option value="Kuliah">Kuliah</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status" id="">
                            <option value="Sudah menikah">Sudah menikah</option>
                            <option value="Belum nikah">Belum nikah</option>
                            <option value="Pelajar">Pelajar</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="hobi" id="" value="Membaca">Membaca
                        <input type="checkbox" name="hobi" id="" value="Manulis">Manulis
                        <input type="checkbox" name="hobi" id="" value="Ngepush">Ngepush
                    </td>
                </tr>
                <tr>
                    <td>Cita-cita</td>
                    <td>:</td>
                    <td>
                        <select name="cita_cita" id="">
                            <option value="Programmer">Programmer</option>
                            <option value="Dokter">Dokter</option>
                            <option value="Development">Development</option>
                            <option value="Arcitek">Arcitek</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kata-kata bijak</td>
                    <td>:</td>
                    <td><textarea name="kt_bijak" id=""></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" id="" value="KIRIM"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if(isset($_POST['proses'])) {

$nama1 = $_POST['nama'];
$tempat_lahir1 = $_POST['tempat_lahir'];
$tgl_lahir1 = $_POST['tanggal_lahir'];
$js1 = $_POST['js'];
$alamat1 = $_POST['alamat'];
$agama1 = $_POST ['agama'];
$pendidikan_terakhir1 = $_POST['pendidikan_terakhir'];
$status1 = $_POST['status'];
$hobi1 = $_POST['hobi'];
$ct_ct = $_POST['cita_cita'];
$ktkt_bijak = $_POST['kt_bijak'];


echo "<center>";
echo "<hr>";
echo "<h2>Data Siswa</h2>";
echo "<table  cellpadding='15' >";
echo "<tr><td>Nama </td><td>:</td><td> $nama1 </td></tr>";
echo "<tr><td>Tempat lahir </td><td>:</td><td> $tempat_lahir1 </td></tr>";
echo "<tr><td>Tanggal lahir </td><td>:</td><td> $tgl_lahir1 </td></tr>";
echo "<tr><td>Jenis kelamin </td><td>:</td><td> $js1 </td></tr>";
echo "<tr><td>Alamat </td><td>:</td><td> $alamat1 </td></tr>";
echo "<tr><td>Agama </td><td>:</td><td> $agama1 </td></tr>";
echo "<tr><td>Pendidikan terakhir </td><td>:</td><td> $pendidikan_terakhir1 </td></tr>";
echo "<tr><td>Status </td><td>:</td><td> $status1 </td></tr>";
echo "<tr><td>Hobi </td><td>:</td><td> $hobi1 </td></tr>";
echo "<tr><td>Cita-cita </td><td>:</td><td> $ct_ct </td></tr>";
echo "<tr><td>Kata-kata bijak </td><td>:</td><td> $ktkt_bijak </td></tr>";
echo "</table>";
}
?>

    