<?php
$nomer1 = $_POST['nomer'];
$nama1 = $_POST['nama'];
$unit_pendidikan = $_POST['unit_p'];
$tgl_gaji = $_POST['tgl'];
$jabatan = $_POST['jbt'];
$lama_kerja = $_POST['lama_k'];
$status_kerja = $_POST['status_k'];

$bpjs1 = $_POST['bpjs'];
$pinjaman = $_POST['pinjam'];
$tabungan1 = $_POST['tabungan'];
$lainnya = $_POST['lain'];

switch ($jabatan) { 
    case "Kepala Sekolah":
        $gaji_karyawan = 10000000; 
        break;
    case "Wakasek":
        $gaji_karyawan = 7500000; 
        break;
    case "Guru":
        $gaji_karyawan = 5000000; 
        break;
    case "OB":
        $gaji_karyawan = 2500000; 
        break;
    default:
        $gaji_karyawan = 0;
        break;
}

if ($lama_kerja > 5) {
    $tunjangan = 1000000;  
} else {
    $tunjangan = 0; 
}

if ($status_kerja == "Tetap") {
    $bonus = 500000;  
} else {
    $bonus = 0;  
}

$gaji_kotor = $gaji_karyawan + $tunjangan + $bonus;
$total_potongan = $bpjs1 + $pinjaman + $tabungan1 + $lainnya;
$gaji_bersih = $gaji_kotor - $total_potongan;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Struk Gaji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <center>
        <h3>Struk Gaji</h3>
        <div class="container mt-5" style="width: 450px;">
            <div class="card">
                <div class="card-header text-center">
                <h5><?php echo $nama1; ?></h5>
                </div>
                <div class="card-body text-primary">
                    <h3>Primary Card Title</h3><br>
                    <table>
                        <tr>
                            <td>No</td>
                            <td>:</td>
                            <td><?php echo $nomer1; ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php echo $nama1; ?></td>
                        </tr>
                        <tr>
                            <td>Unit Pendidikan</td>
                            <td>:</td>
                            <td><?php echo $unit_pendidikan; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Gaji</td>
                            <td>:</td>
                            <td><?php echo $tgl_gaji; ?></td>
                        </tr>
                    </table>
                        <br>
                        <h3>Gaji</h3>
                        <br>
                    <table>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td><?php echo $jabatan; ?></td>
                        </tr>
                        <tr>
                            <td>Gaji</td>
                            <td>:</td>
                            <td>Rp. <?php echo $gaji_karyawan; ?></td>
                        </tr>
                        <tr>
                            <td>Lama Kerja</td>
                            <td>:</td>
                            <td><?php echo $lama_kerja; ?> Tahun</td>
                        </tr>
                        <tr>
                            <td>Tunjangan Lama Kerja</td>
                            <td>:</td>
                            <td>Rp. <?php echo $tunjangan; ?></td>
                        </tr>
                        <tr>
                            <td>Status Kerja</td>
                            <td>:</td>
                            <td><?php echo $status_kerja; ?></td>
                        </tr>
                        <tr>
                            <td>Bonus</td>
                            <td>:</td>
                            <td>Rp. <?php echo $bonus; ?></td>
                        </tr>
                        <tr>
                            <th>Gaji Kotor</th>
                            <td>:</td>
                            <td>Rp. <?php echo $gaji_kotor; ?></td>
                        </tr>
                    </table>
                        <br>
                        <h3>Potongan</h3>
                        <br>
                    <table>
                        <tr>
                            <td>BPJS</td>
                            <td>:</td>
                            <td>Rp. <?php echo $bpjs1; ?></td>
                        </tr>
                        <tr>
                            <td>Pinjaman</td>
                            <td>:</td>
                            <td>Rp. <?php echo $pinjaman; ?></td>
                        </tr>
                        <tr>
                            <td>Tabungan</td>
                            <td>:</td>
                            <td>Rp. <?php echo $tabungan1; ?></td>
                        </tr>
                        <tr>
                            <td>Lainnya</td>
                            <td>:</td>
                            <td>Rp. <?php echo $lainnya; ?></td>
                        </tr>
                        <tr>
                            <th>Total Potongan</th>
                            <td>:</td>
                            <td>Rp. <?php echo $total_potongan; ?></td>
                        </tr>
                    </table>
                        <br>
                        <h3>Total</h3>
                        <br>
                    <table>
                        <tr>
                            <td><h4>Gaji Bersih</h4></td>
                            <td>:</td>
                            <td><h4>Rp. <?php echo $gaji_bersih; ?></h4></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </center>
</body>
</html>
