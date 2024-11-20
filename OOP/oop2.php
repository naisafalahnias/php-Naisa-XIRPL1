<?php 

class ppdb{
    public function data_diri($jurusan,$nama,$jk,$tmpt_lahir,$tgl_lahir,$notelp,$email) {

        echo "<h3>Data Diri Calon Pendaftar</h3>";
        echo "Jurusan : $jurusan <br>";
        echo "Nama Lengkap : $nama <br>";
        echo "Jenis kelamin : $jk <br>";
        echo "Tempat lahir : $tmpt_lahir <br>";
        echo "Tanggal Lahir : $tgl_lahir <br>";
        echo "No HP siswa : $notelp <br>";
        echo "Email : $email <br>";

    } 
    public function alamat_pendaftar($provinsi,$kota,$kecamatan,$desa,$alamat,$kodepos) {

        echo "<h3>Alamat Calon Pendaftar</h3>";
        echo "Provinsi : $provinsi <br>";
        echo "Kab / Kota : $kota <br>";
        echo "Kecamatan : $kecamatan <br>";
        echo "Desa / Kelurahan : $desa <br>";
        echo "Alamat : $alamat <br>";
        echo "Kode Pos : $kodepos <br>";

    } 
    public function asal_sekolah($nama,$alamat) {

        echo "<h3>Data Asal Sekolah</h3>";
        echo "Nama Sekolah : $nama <br>";
        echo "Alamat Sekolah : $alamat <br>";

    } 
    public function data_ortu($nama,$pekerjaan,$notelp,$alamat) {

        echo "<h3>Data Orang Tua</h3>";
        echo "Nama Lengkap Ayah / Ibu / Wali : $nama <br>";
        echo "Pekerjaan Ayah / Ibu / Wali : $nama <br>";
        echo "No HP yang bisa dihubungi : $notelp <br>";
        echo "Alamat Lengkap : $alamat";

    } 
}

$cetak = new ppdb();

echo "<hr>";
echo $cetak->data_diri("RPL","Naisafalah","Perempuan","Cilacap","30-09-2007","085754530888","naisa@gmail.com");
echo "<hr>";
echo $cetak->alamat_pendaftar("Jawa Barat","Bandung","Baleendah","Rancamanyar","Pohon Mangga","0101");
echo "<hr>";
echo $cetak->asal_sekolah("MTs Nurul Iman","Cibaduyut");
echo "<hr>";
echo $cetak->data_ortu("Gunadi","Interior","0897654320","Pohon Mangga");
echo "<hr>";
