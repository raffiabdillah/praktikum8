<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .warning {
            color: #FF0000;
        }

        .row {
            place-content: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php
        $error_nama = "";
        $error_jenis_kelamin = "";
        $error_nisn = "";
        $error_nik = "";
        $error_tanggal = "";
        $error_lahir = "";
        $error_agama = "";
        $error_disabilitas = "";
        $error_alamat = "";
        $error_rt = "";
        $error_rw = "";
        $error_dusun = "";
        $error_kelurahan = "";
        $error_kodepos = "";
        $error_tempattinggal = "";
        $error_modatransportasi = "";
        $error_nohp = "";
        $error_notelp = "";
        $error_email = "";
        $error_penerimakps = "";
        $error_nokps = "";
        $error_warganegara = "";


        
        
        
        $nama = "";
        $jenis_kelamin = "";
        $nisn = "";
        $nik = "";
        $tanggal = "";
        $lahir = "";
        $agama = "";
        $disabilitas = "";
        $alamat = "";
        $rt = "";
        $rw = "";
        $dusun = "";
        $kelurahan = "";
        $kodepos = "";
        $tempattinggal = "";
        $modatransportasi = "";
        $nohp = "";
        $notelp = "";
        $email = "";
        $penerimakps = "";
        $nokps = "";
        $warganegara = "";
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nama"])) {
                $error_nama = "nama tidak boleh kosong";
            } else {
                $nama = cek_input($_POST["nama"]);
            }
    
            if (empty($_POST["jenis_kelamin"])) {
                $error_jenis_kelamin = "tidak boleh kosong";
            } 
            else {
                $jenis_kelamin = cek_input($_POST["jenis_kelamin"]);
            }

            if (empty($_POST["nisn"])) {
                $error_nisn = "NISN tidak boleh kosong";
            } 
            else {
                $nisn = cek_input($_POST["nisn"]);
            }
    
            if (empty($_POST["nik"])) {
                $error_nik = "NIK tidak boleh kosong";
            }
            else {
                $nik = cek_input($_POST["nik"]);
            }
    
            if (empty($_POST["tanggal_lahir"])) {
                $error_tanggal = "Tanggal Lahir tidak boleh kosong";
            } else {
                $tanggal = cek_input($_POST["tanggal_lahir"]);
            }
    
            if (empty($_POST["tempat_lahir"])) {
                $error_lahir = "Tempat Lahir tidak boleh kosong";
            } 
            else {
                $lahir = cek_input($_POST["tempat_lahir"]);
            }

            if (empty($_POST["agama"])) {
                $error_agama = "Agama tidak boleh kosong";
            } 
            else {
                $agama = cek_input($_POST["agama"]);
            }

            if (empty($_POST["disabilitas"])) {
                $error_disabilitas = " tidak boleh kosong";
            } 
            else {
                $disabilitas = cek_input($_POST["disabilitas"]);
            }

            if (empty($_POST["alamat"])) {
                $error_alamat = "alamat tidak boleh kosong";
            } 
            else {
                $alamat = cek_input($_POST["alamat"]);
            }

            if (empty($_POST["rt"])) {
                $error_rt = "rt tidak boleh kosong";
            } 
            else {
                $rt = cek_input($_POST["rt"]);
            }
            if (empty($_POST["rw"])) {
                $error_rw = "Ijazah tidak boleh kosong";
            } 
            else {
                $rw = cek_input($_POST["rw"]);
            }

            if (empty($_POST["nama_dusun"])) {
                $error_dusun = "dusun tidak boleh kosong";
            } 
            else {
                $dusun = cek_input($_POST["nama_dusun"]);
            }

            if (empty($_POST["kelurahan"])) {
                $error_kelurahan = "Ijazah tidak boleh kosong";
            } 
            else {
                $kelurahan = cek_input($_POST["kelurahan"]);
            }

            if (empty($_POST["kodepos"])) {
                $error_kodepos = "Ijazah tidak boleh kosong";
            } 
            else {
                $kodepos = cek_input($_POST["kodepos"]);
            }

            if (empty($_POST["email"])) {
                $error_email = "email tidak boleh kosong";
            } 
            else {
                $email = cek_input($_POST["email"]);
            }
    
            include 'koneksi.php';
        if (empty($_POST["nama"]) || empty($_POST["jenis_kelamin"]) || empty($_POST["nisn"]) ||empty($_POST["nik"])||
        empty($_POST["tanggal_lahir"]) || empty($_POST["tempat_lahir"]) || empty($_POST["agama"]) || empty($_POST["disabilitas"]) || 
        empty($_POST["alamat"]) || empty($_POST["rt"]) || empty($_POST["rw"]) || empty($_POST["nama_dusun"]) || empty($_POST["kelurahan"]) 
        || empty($_POST["kodepos"]) || empty($_POST["tempattinggal"]) || empty($_POST["modatransportasi"]) || empty($_POST["email"])
         || empty($_POST["penerimakps"]) || empty($_POST["warganegara"])  )  {
           
        } else {
            $nama = $_POST["nama"];
            $jenis_kelamin = $_POST["jenis_kelamin"];
            $nisn = $_POST["nisn"];
            $nik = $_POST["nik"];
            $tanggal = $_POST["tanggal_lahir"];
            $lahir = $_POST["tempat_lahir"];
            $agama = $_POST["agama"];
            $disabilitas = $_POST["disabilitas"];
            $alamat = $_POST["alamat"];
            $rt = $_POST["rt"];
            $rw = $_POST["rw"];
            $dusun = $_POST["nama_dusun"];
            $kelurahan = $_POST["kelurahan"];
            $kodepos = $_POST["kodepos"];
            $tempattinggal = $_POST["tempattinggal"];
            $modatransportasi = $_POST["modatransportasi"];
            $nohp = $_POST["nohp"];
            $notelp = $_POST["notelp"];
            $email = $_POST["email"];
            $penerimakps = $_POST["penerimakps"];
            $nokps = $_POST["nokps"];
            $warganegara = $_POST["warganegara"];
        
        
              // mendapatkan tanggal dan waktu saat ini
              $datetime = date("Y-m-d H:i:s");
        
              // menyimpan ke database
              $sql = mysqli_query($koneksi, "INSERT INTO datapribadi (nama_lengkap, jenis_kelamin, nisn, nik, tmptlahir, tglahir, 
              agama, berkebkhusus, alamat, rt, rw, namadusun, namakel, kodepos, tmpttinggal, transport, nohp, notelp, 
              email, penerimakip, nokip, warganegara) VALUES ('$nama', '$jenis_kelamin', '$nisn', '$nik', '$lahir', 
              '$tanggal', '$agama', '$disabilitas', '$alamat', '$rt', '$rw', '$dusun', '$kelurahan', '$kodepos', 
              '$tempattinggal', '$modatransportasi', '$nohp', '$notelp', '$email', '$penerimakps', '$nokps', '$warganegara')");
              if ($sql) {
                  // pesan jika data berhasil tersimpan
                  echo "<script>alert('Selanjutnya Mengisi Form Data Ayahi!'); window.location.href='formdataayah.php'
                  </script>"; 
                } else {
                  // pesan jika data gagal disimpan
                    echo "alert('Data Registrasi Gagal Ditambahkan!');";
                
              }
        }
        
            
        }
    
        function cek_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <div class="row ">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Data Pribadi
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control 
                                <?php echo ($error_nama != "" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama" value="<?php echo $nama; ?>">
                                <span class="warning"><?php echo $error_nama; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <input type="radio" class="col-md-1" name="jenis_kelamin" value="L">Laki-laki
                                <input type="radio" class="col-md-1" name="jenis_kelamin" value="P">Perempuan
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-10">
                                <input type="text" name="nisn" class="form-control 
                                <?php echo ($error_nisn != "" ? "is-invalid" : ""); ?>" id="nisn" placeholder="nisn" value="<?php echo $nisn; ?>">
                                <span class="warning"><?php echo $error_nisn; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" name="nik" class="form-control 
                                <?php echo ($error_nik != "" ? "is-invalid" : ""); ?>" id="nik" placeholder="nik" value="<?php echo $nik; ?>">
                                <span class="warning"><?php echo $error_nik; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                            <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control 
                            
                                <?php echo ($error_tanggal != "" ? "is-invalid" : ""); ?>" id="tanggal_lahir" placeholder="tanggal_lahir" value="<?php echo $tanggal; ?>">
                                <span class="warning"><?php echo $error_tanggal; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat lahir</label>
                            <div class="col-sm-10">
                                <textarea name="tempat_lahir" class="form-control 
                                <?php echo ($error_lahir != "" ? "is-invalid" : ""); ?>"><?php echo $lahir; ?></textarea><span class="warning">
                                    <?php echo $error_lahir; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                            <input type="radio" class="col-md-1" name="agama" value="Islam">Islam
                            <input type="radio" class="col-md-1" name="agama" value="Kristen/Protestan">Kristen/Protestan
                            <input type="radio" class="col-md-1" name="agama" value="Katholik">Katholik
                            <input type="radio" class="col-md-1" name="agama" value="Hindu">Hindu
                            <input type="radio" class="col-md-1" name="agama" value="Budha">Budha
                            <input type="radio" class="col-md-1" name="agama" value="Khong Hu Chu">Khong Hu Chu
                            <input type="radio" class="col-md-1" name="agama" value="lainnya">lainnya
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="disabilitas" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
                            <div class="col-sm-10">
                            <select id="agama" name="disabilitas">
                            <option value="tidak">Tidak </option>
                            <option value="netra">Netra</option>
                            <option value="rungu">Rungu</option>
                            <option value="grahita ringan">Grahita Ringan</option>
                            <option value="grahita sedang">Grahita Sedang</option>
                            <option value="daksa ringan">Daksa Ringan</option>
                            <option value="daksa sedang">Daksa Sedang</option>
                            <option value="laras">laras</option>
                            <option value="tuna ganda">Tuna ganda</option>
                            <option value="wicara">wicara</option>
                            <option value="hiper aktif">Hiper aktif</option>
                            <option value="cerdas istimewa">Cerdas istimewa</option>
                            <option value="bakat istimewa">Bakat Istimewa</option>
                            <option value="kesulitan belajar">Kesulitan belajar</option>
                            <option value="narkoba">Narkoba</option>
                            <option value="indigo">Indigo</option>
                            <option value="downsindrom">Downsindrom</option>
                            <option value="autis">autis</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea name="alamat" class="form-control 
                                <?php echo ($error_alamat != "" ? "is-invalid" : ""); ?>"><?php echo $alamat; ?></textarea><span class="warning">
                                    <?php echo $error_alamat; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rt" class="col-sm-2 col-form-label">RT</label>
                            <div class="col-sm-10">
                                <input type="text" name="rt" class="form-control 
                                <?php echo ($error_rt != "" ? "is-invalid" : ""); ?>" id="rt" placeholder="rt" value="<?php echo $rt; ?>">
                                <span class="warning"><?php echo $error_rt; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rw" class="col-sm-2 col-form-label">RW</label>
                            <div class="col-sm-10">
                                <input type="text" name="rw" class="form-control 
                                <?php echo ($error_rw != "" ? "is-invalid" : ""); ?>" id="rw" placeholder="rw" value="<?php echo $rw; ?>">
                                <span class="warning"><?php echo $error_rw; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_dusun" class="col-sm-2 col-form-label">Nama Dusun</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_dusun" class="form-control 
                                <?php echo ($error_dusun != "" ? "is-invalid" : ""); ?>" id="nama_dusun" placeholder="nama dusun" value="<?php echo $dusun; ?>">
                                <span class="warning"><?php echo $error_dusun; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan/Desa</label>
                            <div class="col-sm-10">
                                <input type="text" name="kelurahan" class="form-control 
                                <?php echo ($error_kelurahan != "" ? "is-invalid" : ""); ?>" id="kelurahan" placeholder="kelurahan" value="<?php echo $kelurahan; ?>">
                                <span class="warning"><?php echo $error_kelurahan; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kodepos" class="col-sm-2 col-form-label">Kode pos</label>
                            <div class="col-sm-10">
                                <input type="text" name="kodepos" class="form-control 
                                <?php echo ($error_kodepos != "" ? "is-invalid" : ""); ?>" id="kodepos" placeholder="kodepos" value="<?php echo $kodepos; ?>">
                                <span class="warning"><?php echo $error_kodepos; ?></span>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="tempattinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label>
                            <div class="col-sm-10">
                            <select id="tempattinggal" name="tempattinggal">
                            <option value="Bersama Orang Tua">Bersama Orang Tua </option>
                            <option value="Wali">Wali</option>
                            <option value="Kos">Kos</option>
                            <option value="Asrama">Asrama</option>
                            <option value="Panti Asuhan">Panti Asuhan</option>
                            <option value="Lainnya">Lainnya</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="modatransportasi" class="col-sm-2 col-form-label">Moda Transporatasi</label>
                            <div class="col-sm-10">
                            <select id="modatransportasi" name="modatransportasi">
                            <option value="jalan kaki">jalan kaki </option>
                            <option value="kendaraan pribadi">Kendaraan Pribadi</option>
                            <option value="kendaraan umum">Kendaraan Umum</option>
                            <option value="jemputan sekolah">Jemputan Sekolah</option>
                            <option value="kereta api">Kereta Api</option>
                            <option value="Ojek">Ojek</option>
                            <option value="Andong/bendi/sado/dokar/delman/becak">Andong/bendi/sado/dokar/delman/becak</option>
                            <option value="perahu penyebrangan/rakit/getek">perahu penyebrangan/rakit/getek</option>
                            <option value="lainnya">Lainnya</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nohp" class="col-sm-2 col-form-label">No Hp</label>
                            <div class="col-sm-10">
                                <input type="text" name="nohp" class="form-control 
                                <?php echo ($error_nohp != "" ? "is-invalid" : ""); ?>" id="nohp" placeholder="nohp" value="<?php echo $nohp; ?>">
                                <span class="warning"><?php echo $error_nohp; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="notelp" class="col-sm-2 col-form-label">No Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" name="notelp" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control 
                                <?php echo ($error_email != "" ? "is-invalid" : ""); ?>" id="kodepos" placeholder="Email" value="<?php echo $email; ?>">
                                <span class="warning"><?php echo $error_email; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="penerimakps" class="col-sm-2 col-form-label">Penerima KPS/KKS/PHK/KIP</label>
                            <div class="col-sm-10">
                                <input type="radio" class="col-md-1" name="penerimakps" value="ya">Y
                                <input type="radio" class="col-md-1" name="penerimakps" value="Tidak">Tidak
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nokps" class="col-sm-2 col-form-label">No KIP/KPS</label>
                            <div class="col-sm-10">
                                <input type="text" name="nokps" class="form-control"> 
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="warganegara" class="col-sm-2 col-form-label">warga negara</label>
                            <div class="col-sm-10">
                                <input type="radio" class="col-md-1" name="warganegara" value="Indonesia">Indonesia(WNI)
                                <input type="radio" class="col-md-1" name="warganegara" value="WNA">WNA
                            </div>
                        </div>

                        <div class="form-group row mt-5">
                            <div class="col-sm-10 mt-5">
                                <button type="submit" class="btn btn-primary" style="margin-left: 85%;" >Next</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


   
</body>

</html>