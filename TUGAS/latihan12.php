<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="latihan122.php" method="post">
    <div class="card">
        <div class="card-header"> 
            <h3>Data Diri Calon Pendaftar (Form wajib di isi)</h3>
        </div>  
            <div class="card-body">
                    <div class="mb-3 d-flex">
                    <label class="col-sm-2 col-form-label">Jurusan</label>
                        <select class="form-select" name="jurusan">
                            <option selected>Pilih Jurusan</option>
                            <option value="TKRO(MOBIL)">TKRO(MOBIL)</option>
                            <option value="TBSM(SEPEDA MOTOR)">TBSM(SEPEDA MOTOR)</option>
                            <option value="RPL(KOMPUTER)">RPL(KOMPUTER)</option>
                        </select>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control"  placeholder="Nama Lengkap" name="nama_siswa">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10 d-flex flex-column">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki">
                                <label class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">
                                <label class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  placeholder="Tempat Lahir" name="t_lahir">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tgl_lahir">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nomor HP siswa</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" placeholder="HP" name="no_siswa">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                    </div>              
            </div>       
    </div>
    
    <div class="card">
        <div class="card-header"> 
            <h3>Alamat Calon Pendaftar</h3>
        </div>  
        <div class="card-body">
                <div class="mb-3 d-flex">
                        <label class="col-sm-2 col-form-label">Provinsi</label>
                            <select class="form-select" name="provinsi">
                                <option value="-">Pilih Provinsi</option>
                                <option value="Aceh">Aceh</option>
                                <option value="Sumatera Utara">Sumatera Utara</option>
                                <option value="Sumatera Barat">Sumatera Barat</option>
                                <option value="Riau">Riau</option>
                                <option value="Kepulauan Riau">Kepulauan Riau</option>
                                <option value="Jawa Barat">Jawa Barat</option>
                                <option value="Jawa Tengah">Jawa Tengah</option>
                                <option value="Jawa Timur">Jawa Timur</option>
                                <option value="Bali">Bali</option>
                                <option value="Papua">Papua</option>
                            </select>
                </div>
                <div class="mb-3 d-flex">
                        <label class="col-sm-2 col-form-label">Kab / Kota</label>
                            <select class="form-select" name="kota">
                                <option value="-">Pilih Kota</option>
                                <option value="-">Pilih Kota</option>
                                <option value="Bandung">Bandung</option>
                                <option value="Bandung Barat">Bandung Barat</option>
                                <option value="Bekasi">Bekasi</option>
                                <option value="Bogor">Bogor</option>
                                <option value="Ciamis">Ciamis</option>
                                <option value="Cianjur">Cianjur</option>
                                <option value="Cimahi">Cimahi</option>
                                <option value="Cirebon">Cirebon</option>
                                <option value="Garut">Garut</option>
                                <option value="Indramayu">Indramayu</option>
                            </select>
                </div>
                <div class="mb-3 d-flex">
                        <label class="col-sm-2 col-form-label">Kecamatan</label>
                            <select class="form-select" name="kecamatan">
                                <option value="-">Pilih Kecamatan</option>
                                <option value="Andir">Andir</option>
                                <option value="Antapani">Antapani</option>
                                <option value="Arcamanik">Arcamanik</option>
                                <option value="Astanaanyar">Astanaanyar</option>
                                <option value="Babakan Ciparay">Babakan Ciparay</option>
                                <option value="Bandung Kidul">Bandung Kidul</option>
                                <option value="Bandung Kulon">Bandung Kulon</option>
                                <option value="Bandung Wetan">Bandung Wetan</option>
                                <option value="Batununggal">Batununggal</option>
                                <option value="Bojongloa Kaler">Bojongloa Kaler</option>
                            </select>
                </div>
                <div class="mb-3 d-flex">
                        <label class="col-sm-2 col-form-label">Desa / Kelurahan</label>
                            <select class="form-select" name="desa">
                            <option value="-">Pilih Desa / </option>
                                <option value="Ciburial">Ciburial</option>
                                <option value="Cileunyi">Cileunyi</option>
                                <option value="Ciparay">Ciparay</option>
                                <option value="Margaluyu">Margaluyu</option>
                                <option value="Mekarsari">Mekarsari</option>
                                <option value="Cangkuang">Cangkuang</option>
                                <option value="Pangalengan">Pangalengan</option>
                                <option value="Rancamanyar">Rancamanyar</option>
                                <option value="Sukamaju">Sukamaju</option>
                                <option value="Sukasari">Sukasari</option>
                            </select>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="alamat" placeholder="Tulis alamat"></textarea> 
                        </div>
                </div>
                <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Kode Pos</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" placeholder="Kode Pos" name="kode">
                            </div>
                </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header"> 
            <h3>Data Asal Sekolah</h3>
        </div> 
        <div class="card-body">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama Asal Sekolah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nama Asal Sekolah" name="asal_sklh">
                        </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Alamat Sekolah</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="alamat_sklh" placeholder="Alamat Sekolah"></textarea> 
                        </div>
                </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>Data Orang Tua</h3>
        </div>
        <div class="card-body">
            <div class="row g-3" align="left">
                <div class="col-sm d-flex align-items-center">
                    <label class="form-label me-5">Nama</label>
                    <select class="form-select" name="ortu" required>
                        <option value="Ayah">Ayah</option>
                        <option value="Ibu">Ibu</option>
                        <option value="Wali">Wali</option>
                    </select>
                </div>
                <div class="col-sm">
                    <input type="text" class="form-control" name="nama_ortu" placeholder="Nama Lengkap" required>
                </div>
            </div><br>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Pekerjaan Ortu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan">
                    </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" placeholder="Nomer HP" name="hp_ortu">
                    </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Alamat Lengkap</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" name="alamat_ortu" placeholder="Alamat Lengkap"></textarea> 
                    </div>
            </div>
            <center><br>
                <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
            </center>
        </div>
    </div>
    </form>
</body>
</html>