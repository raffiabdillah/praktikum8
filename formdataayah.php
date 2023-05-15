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
    $error_nama_ayah = "";
    $error_tanggal_lahir = "";
    $error_pendidikan = "";
    $error_pekerjaan = "";
    $error_penghasilan_bulanan = "";
    $error_disabilitas = "";
   
    
    
    $nama_ayah = "";
    $tanggal_lahir = "";
    $pendidikan = "";
    $pekerjaan = "";
    $penghasilan_bulanan = "";
    $disabilitas = "";
   

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama_ayah"])) {
            $error_nama_ayah = "Nama tidakboleh kosong";
        } else {
            $nama_ayah = cek_input($_POST["nama_ayah"]);
        }


        if (empty($_POST["tanggal"])) {
            $error_tanggal_lahir = "Tanggal tidak boleh kosong";
        } 
        else {
            $tanggal_lahir = cek_input($_POST["tanggal"]);
        }

        if (empty($_POST["pendidikan"])) {
            $error_pendidikan = "Pendidikan Peserta tidak boleh kosong";
        }
        else {
            $pendidikan = cek_input($_POST["pendidikan"]);
        }

        if (empty($_POST["pekerjaan"])) {
            $error_pekerjaan = "pekerjaan tidak boleh kosong";
        } else {
            $pekerjaan = cek_input($_POST["pekerjaan"]);
        }

        if (empty($_POST["penghasilan_bulanan"])) {
            $error_penghasilan_bulanan = "Penghasilan tidak boleh kosong";
        } 
        else {
            $penghasilan_bulanan = cek_input($_POST["penghasilan_bulanan"]);
        }

       

        include 'koneksi.php';
    if (empty($_POST["nama_ayah"]) || empty($_POST["tanggal"]) || empty($_POST["pendidikan"]) ||empty($_POST["pekerjaan"])||
    empty($_POST["penghasilan_bulanan"]) || empty($_POST["disabilitas"])) {
       
    } else {
            $nama_ayah = $_POST['nama_ayah'];;
            $tanggal_lahir = $_POST["tanggal"];
            $pendidikan = $_POST["pendidikan"];
            $pekerjaan = $_POST["pekerjaan"];
            $penghasilan_bulanan = $_POST["penghasilan_bulanan"];
            $disabilitas = $_POST["disabilitas"];
    
    
          // mendapatkan tanggal dan waktu saat ini
          $datetime = date("Y-m-d H:i:s");
    
          // menyimpan ke database
          $sql = mysqli_query($koneksi, "INSERT INTO dataayah (nama_ayah, tanggal_lahir, pendidikan, pekerjaan, penghasilan_bulanan, 
          disabilitas) VALUES ('$nama_ayah', '$tanggal_lahir', '$pendidikan', 
          '$pekerjaan', '$penghasilan_bulanan', '$disabilitas')");
          if ($sql) {
              // pesan jika data berhasil tersimpan
              echo "<script>alert('Selanjutnya Mengisi Form Data Ibu!'); window.location.href='formdataibu.php'
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
                    Formulir Pendaftaran Peserta Didik
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                        <div class="form-group row">
                            <label for="nama_ayah" class="col-sm-2 col-form-label">Nama Ayah</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_ayah" class="form-control 
                                <?php echo ($error_nama_ayah != "" ? "is-invalid" : ""); ?>" id="nama" placeholder="" value="<?php echo $nama_ayah; ?>">
                                <span class="warning"><?php echo $error_nama_ayah; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                            <input type="date" id="tanggal" name="tanggal">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                            <div class="col-sm-10">
                            <select id="pendidikan" name="pendidikan">
                            <option selected disabled value="">Pilih...</option>
                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                            <option value="Putus SD">Putus SD</option>
                            <option value="SD Sederajat">SD Sederajat</option>
                            <option value="SMP Sederajat">SMP Sederajat</option>
                            <option value="SMA Sederajat">SMA Sederajat</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                            <select id="pekerjaan" name="pekerjaan">
                            <option selected disabled value="">Pilih...</option>
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Petani">Petani</option>
                            <option value="Peternak">Peternak</option>
                            <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Pedagang Kecil">Pedagang Kecil</option>
                            <option value="Pedagang Besar">Pedagang Besar</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Wirausaha">Wirausaha</option>
                            <option value="Buruh">Buruh</option>
                            <option value="Pensiunan">Pensiunan</option>
                            <option value="Lainnya">Lainnya</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="penghasilan_bulanan" class="col-sm-2 col-form-label">Penghasilan Bulanan</label>
                            <div class="col-sm-10">
                            <select id="penghasilan_bulanan" name="penghasilan_bulanan">
                            <option selected disabled value="">Pilih...</option>
                            <option value="< 500.000">< 500.000</option>
                            <option value="500.000 - 999.999">500.000 - 999.999</option>
                            <option value="1 Juta - 1.999.999">1 Juta - 1.999.999</option>
                            <option value=" 2 Juta - 4.999.999"> 2 Juta - 4.999.999</option>
                            <option value="5 Juta - 20 Juta">5 Juta - 20 Juta</option>
                            <option value="Lebih dari 20 Juta">Lebih dari 20 Juta</option>
                            </select>
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