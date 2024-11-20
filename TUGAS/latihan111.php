<?php
if (isset($_POST['hitung'])) {
    $nama1 = $_POST['nama'];
    $kelas1 = $_POST['kelas'];
    $jurusan1 = $_POST['jurusan'];

    $n_harian = $_POST['harian1'];
    $n_tgs = $_POST['tgs1'];
    $n_uts = $_POST['uts1'];
    $n_uas = $_POST['uas1'];

    $n_harian1 = $_POST['harian2'];
    $n_tgs1 = $_POST['tgs2'];
    $n_uts1 = $_POST['uts2'];
    $n_uas1 = $_POST['uas2'];

    $n_harian2 = $_POST['harian3'];
    $n_tgs2 = $_POST['tgs3'];
    $n_uts2 = $_POST['uts3'];
    $n_uas2 = $_POST['uas3'];

    $n_harian3 = $_POST['harian4'];
    $n_tgs3 = $_POST['tgs4'];
    $n_uts3 = $_POST['uts4'];
    $n_uas3 = $_POST['uas4'];

    class nilaimapel{
        public $nama;
        public $harian;
        public $tugas;
        public $uts;
        public $uas;
        public $rataRata;
        public $grade;

        public function setNilai($nama, $harian1, $tugas1, $uts1, $uas1) {
            $this->nama = $nama;
            $this->harian = $harian1;
            $this->tugas = $tugas1;
            $this->uts = $uts1;
            $this->uas = $uas1;
            $this->rataRata = ($harian1 + $tugas1 + $uts1 + $uas1) / 4;
            $this->grade = $this->grade();
        }

        public function grade() {
            return $this->rataRata >= 75 ? "Tuntas" : "Tidak Tuntas";
        }
    }

    $matematika = new nilaimapel();
    $matematika->setNilai("Matematika", $n_harian, $n_tgs, $n_uts, $n_uas);

    $indonesia = new nilaimapel();
    $indonesia->setNilai("Indonesia", $n_harian1, $n_tgs1, $n_uts1, $n_uas1);

    $inggris = new nilaimapel();
    $inggris->setNilai("Inggris", $n_harian2, $n_tgs2, $n_uts2, $n_uas2);

    $produktif = new nilaimapel();
    $produktif->setNilai("Produktif", $n_harian3, $n_tgs3, $n_uts3, $n_uas3);

    echo "<center>";
    echo "Nama    : $nama1<br>";
    echo "Kelas   : $kelas1<br>";
    echo "Jurusan : $jurusan1<br><br>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr>
            <th>Mapel</th>
            <th>Harian</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Rata-rata</th>
            <th>Grade</th>
          </tr>";

    echo "<tr>
            <td>{$matematika->nama}</td>
            <td>{$matematika->harian}</td>
            <td>{$matematika->tugas}</td>
            <td>{$matematika->uts}</td>
            <td>{$matematika->uas}</td>
            <td>{$matematika->rataRata}</td>
            <td>{$matematika->grade}</td>
          </tr>";

    echo "<tr>
            <td>{$indonesia->nama}</td>
            <td>{$indonesia->harian}</td>
            <td>{$indonesia->tugas}</td>
            <td>{$indonesia->uts}</td>
            <td>{$indonesia->uas}</td>
            <td>{$indonesia->rataRata}</td>
            <td>{$indonesia->grade}</td>
          </tr>";

    echo "<tr>
            <td>{$inggris->nama}</td>
            <td>{$inggris->harian}</td>
            <td>{$inggris->tugas}</td>
            <td>{$inggris->uts}</td>
            <td>{$inggris->uas}</td>
            <td>{$inggris->rataRata}</td>
            <td>{$inggris->grade}</td>
          </tr>";

    echo "<tr>
            <td>{$produktif->nama}</td>
            <td>{$produktif->harian}</td>
            <td>{$produktif->tugas}</td>
            <td>{$produktif->uts}</td>
            <td>{$produktif->uas}</td>
            <td>{$produktif->rataRata}</td>
            <td>{$produktif->grade}</td>
          </tr>";

    echo "</table></center>";
}
?>
