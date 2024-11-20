<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <center>
        <div class="card border-primary mb-3" style="max-width: 30rem;">
            <div class="card-header"><h3>Data Pendaftar</h3></div>
            <div class="card-body text-primary">
            <?php
                if (isset($_POST['daftar'])) {
                    $jurusan = $_POST['jurusan'];
                    $nm_siswa = $_POST['nama_siswa'];
                    $jk1 = $_POST['jenis_kelamin'];
                    $tmpt_lhr = $_POST['t_lahir'];
                    $tgl_lhr = $_POST['tgl_lahir'];
                    $hp_siswa1 = $_POST['no_siswa'];
                    $emaill = $_POST['email'];

                    $provinsii = $_POST['provinsi'];
                    $kab = $_POST['kota'];
                    $kecamatann = $_POST['kecamatan'];
                    $kel = $_POST['desa'];
                    $alamat_siswa = $_POST['alamat'];
                    $code = $_POST['kode'];

                    $asal_sekolah = $_POST['asal_sklh'];
                    $alamat_sekolah = $_POST['alamat_sklh'];

                    $ortuu = $_POST['ortu'];
                    $nm_ortu = $_POST['nama_ortu'];
                    $kerja = $_POST['pekerjaan'];
                    $no_ortu = $_POST['hp_ortu'];
                    $alamat_wali = $_POST['alamat_ortu'];

                    class ppdb{
                        public function data_diri($jurusan1,$nama_s,$jk1,$tmpt_lahir,$tgl,$notelp,$email) {
                    
                            echo "<h3><u>Data Diri Calon Pendaftar</u></h3>";
                            echo "Jurusan : $jurusan1 <br>";
                            echo "Nama Lengkap : $nama_s <br>";
                            echo "Jenis kelamin : $jk1 <br>";
                            echo "Tempat lahir : $tmpt_lahir <br>";
                            echo "Tanggal Lahir : $tgl <br>";
                            echo "No HP siswa : $notelp <br>";
                            echo "Email : $email <br>";
                    
                        } 
                        public function alamat_pendaftar($provinsi,$kotaa,$kct,$desa,$alamat_s,$kodepos) {
                    
                            echo "<h3><u>Alamat Calon Pendaftar</u></h3>";
                            echo "Provinsi : $provinsi <br>";
                            echo "Kab / Kota : $kotaa <br>";
                            echo "Kecamatan : $kct <br>";
                            echo "Desa / Kelurahan : $desa <br>";
                            echo "Alamat : $alamat_s <br>";
                            echo "Kode Pos : $kodepos <br>";
                    
                        } 
                        public function asal_sekolah($nama,$alamat) {
                    
                            echo "<h3><u>Data Asal Sekolah</u></h3>";
                            echo "Nama Sekolah : $nama <br>";
                            echo "Alamat Sekolah : $alamat <br>";
                    
                        } 
                        public function data_ortu($nama,$nm,$pekerjaan,$notelp,$alamat) {
                    
                            echo "<h3><u>Data Orang Tua</u></h3>";
                            echo "Ayah / Ibu / Wali : $nm <br>";
                            echo "Nama Lengkap : $nama <br>";
                            echo "Pekerjaan Ayah / Ibu / Wali : $pekerjaan <br>";
                            echo "No HP yang bisa dihubungi : $notelp <br>";
                            echo "Alamat Lengkap : $alamat";
                    
                        } 
                    }
                    
                    $data_s = new ppdb();
                    echo $data_s->data_diri($jurusan,$nm_siswa,$jk1,$tmpt_lhr,$tgl_lhr,$hp_siswa1,$emaill);
                    echo "<hr>";
                    $alamat_s = new ppdb();
                    echo $alamat_s->alamat_pendaftar($provinsii,$kab,$kecamatann,$kel,$alamat_siswa,$code);
                    echo "<hr>";
                    $asal_s = new ppdb();
                    echo $asal_s->asal_sekolah($asal_sekolah,$alamat_sekolah);
                    echo "<hr>";
                    $data_o = new ppdb();
                    echo $data_o->data_ortu($nm_ortu,$ortuu,$kerja,$no_ortu,$alamat_wali);
                    echo "<hr>";
                }
            ?>

            </div>
        </div>
    </center>
</body>
</html>