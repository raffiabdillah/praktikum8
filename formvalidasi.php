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
    $error_jenis_pendaftaran = "";
    $error_tanggal = "";
    $error_nis = "";
    $error_paud = "";
    $error_npu = "";
    $error_tk = "";
    $error_skhun = "";
    $error_ijazah = "";
    $error_hobi = "";
    $error_cita_cita = "";
    
    
    $jenis_pendaftaran = "";
    $tanggal = "";
    $nis = "";
    $paud = "";
    $npu = "";
    $tk = "";
    $skhun = "";
    $ijazah = "";
    $hobi = "";
    $cita_cita = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["tanggal"])) {
            $error_tanggal = "tanggal tidakboleh kosong";
        } else {
            $tanggal = cek_input($_POST["tanggal"]);
        }


        if (empty($_POST["nis"])) {
            $error_nis = "NIS tidak boleh kosong";
        } 
        else {
            $nis = cek_input($_POST["nis"]);
        }

        if (empty($_POST["npu"])) {
            $error_npu = "Nomor Peserta tidak boleh kosong";
        }
        else {
            $npu = cek_input($_POST["npu"]);
        }

        if (empty($_POST["skhun"])) {
            $error_skhun = "SKHUN tidak boleh kosong";
        } else {
            $skhun = cek_input($_POST["skhun"]);
        }

        if (empty($_POST["ijazah"])) {
            $error_ijazah = "Ijazah tidak boleh kosong";
        } 
        else {
            $ijazah = cek_input($_POST["ijazah"]);
        }

        include 'koneksi.php';
    if (empty($_POST["jenis_pendaftaran"]) || empty($_POST["tanggal"]) || empty($_POST["nis"]) ||empty($_POST["paud"])||
    empty($_POST["npu"]) || empty($_POST["tk"]) || empty($_POST["skhun"]) || empty($_POST["ijazah"]) || 
    empty($_POST["hobi"]) || empty($_POST["cita_cita"])) {
       
    } else {
            $jenis_pendaftaran = $_POST['jenis_pendaftaran'];;
            $tanggal = $_POST["tanggal"];
            $nis = $_POST["nis"];
            $paud = $_POST["paud"];
            $npu = $_POST["npu"];
            $tk = $_POST["tk"];
            $skhun = $_POST["skhun"];
            $ijazah = $_POST["ijazah"];
            $hobi = $_POST["hobi"];
            $cita_cita = $_POST["cita_cita"];
    
    
          // mendapatkan tanggal dan waktu saat ini
          $datetime = date("Y-m-d H:i:s");
    
          // menyimpan ke database
          $sql = mysqli_query($koneksi, "INSERT INTO registrasi (tglregis, jnspendaftaran, tglmsksklh, nis, nopsrtujian, 
          appaud, aptk, noseriskhun, noseriijazah, hobi, citacita) VALUES ('$datetime', '$jenis_pendaftaran', '$tanggal', 
          '$nis', '$npu', '$paud', '$tk', '$skhun', '$ijazah', '$hobi', '$cita_cita')");
          if ($sql) {
              // pesan jika data berhasil tersimpan
              echo "<script>alert('Selanjutnya Mengisi Form Data Pribadi!'); window.location.href='formdatapribadi.php'
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
                            <label for="jenis_pendaftaran" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                            <div class="col-sm-10">
                                <input type="radio" class="col-md-1" name="jenis_pendaftaran" value="baru">Baru
                                <input type="radio" class="col-md-1" name="jenis_pendaftaran" value="pindahan">Pindahan
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                            <input type="date" id="tanggal" name="tanggal">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                            <div class="col-sm-10">
                                <input type="text" name="nis" class="form-control 
                                <?php echo ($error_nis != "" ? "is-invalid" : ""); ?>" id="nis" placeholder="" value="<?php echo $nis; ?>">
                                <span class="warning"><?php echo $error_nis; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="npu" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
                            <div class="col-sm-10">
                                <input type="text" name="npu" class="form-control 
                                <?php echo ($error_npu != "" ? "is-invalid" : ""); ?>" id="npu" placeholder="20 Digit nomor peserta ujian" value="<?php echo $npu; ?>">
                                <span class="warning"><?php echo $error_npu; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="paud" class="col-sm-2 col-form-label">Apakah Pernah PAUD?</label>
                            <div class="col-sm-10">
                            <input type="radio" class="col-md-1" name="paud" value="YA">Ya
                            <input type="radio" class="col-md-1" name="paud" value="TIDAK">Tidak
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tk" class="col-sm-2 col-form-label">Apakah Pernah TK?</label>
                            <div class="col-sm-10">
                            <input type="radio" class="col-md-1" name="tk" value="YA">Ya
                            <input type="radio" class="col-md-1" name="tk" value="TIDAK">Tidak
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="skhun" class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
                            <div class="col-sm-10">
                                <input type="text" name="skhun" class="form-control 
                                <?php echo ($error_skhun != "" ? "is-invalid" : ""); ?>" id="skhun" placeholder="" value="<?php echo $skhun; ?>">
                                <span class="warning"><?php echo $error_skhun; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ijazah" class="col-sm-2 col-form-label">No. Seri Ijazah Sebelumnya</label>
                            <div class="col-sm-10">
                                <input type="text" name="ijazah" class="form-control 
                                <?php echo ($error_ijazah!= "" ? "is-invalid" : ""); ?>" id="ijazah" placeholder="" value="<?php echo $ijazah; ?>">
                                <span class="warning"><?php echo $error_ijazah; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hobi" class="col-sm-2 col-form-label">Hobi</label>
                            <div class="col-sm-10">
                            <input type="radio" class="col-md-1" name="hobi" value="olahraga">Olahraga
                            <input type="radio" class="col-md-1" name="hobi" value="kesenian">Kesenian
                            <input type="radio" class="col-md-1" name="hobi" value="membaca">Membaca
                            <input type="radio" class="col-md-1" name="hobi" value="menulis">Menulis
                            <input type="radio" class="col-md-1" name="hobi" value="traveling">Traveling
                            <input type="radio" class="col-md-1" name="hobi" value="lainnya">Lainnya
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cita-cita" class="col-sm-2 col-form-label">Cita-cita</label>
                            <div class="col-sm-10">
                            <input type="radio" class="col-md-1" name="cita_cita" value="PNS">PNS
                            <input type="radio" class="col-md-1" name="cita_cita" value="tni/polri">TNI/Polri
                            <input type="radio" class="col-md-1" name="cita_cita" value="guru/dosen">Guru/Dosen
                            <input type="radio" class="col-md-1" name="cita_cita" value="dokter">Dokter
                            <input type="radio" class="col-md-1" name="cita_cita" value="politikus">Politikus
                            <input type="radio" class="col-md-1" name="cita_cita" value="Wiraswasta">Wiraswasta
                            <input type="radio" class="col-md-1" name="cita_cita" value="seni/lukis dan sejenisnya">Seni/Lukis/Artis/dansejenisnya
                            <input type="radio" class="col-md-1" name="cita_cita" value="lainnya">lainnya
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

    <?php 
    include 'koneksi.php';
    if (empty($_POST["jenis_pendaftaran"]) || empty($_POST["tanggal"]) || empty($_POST["nis"]) ||empty($_POST["paud"])||
    empty($_POST["npu"]) || empty($_POST["tk"]) || empty($_POST["skhun"]) || empty($_POST["ijazah"]) || 
    empty($_POST["hobi"]) || empty($_POST["cita_cita"])) {
        $error_tanggal = "tanggal tidakboleh kosong";
    } else {
        if (isset($_POST['submit'])) {
            $jenis_pendaftaran = $_POST['jenis_pendaftaran'];;
            $tanggal = "";
            $nis = "";
            $paud = "";
            $npu = "";
            $tk = "";
            $skhun = "";
            $ijazah = "";
            $hobi = "";
            $cita_cita = "";
    
    
          // mendapatkan tanggal dan waktu saat ini
          $datetime = date("Y-m-d H:i:s");
    
          // menyimpan ke database
          $sql = mysqli_query($conn, "INSERT INTO registrasi (tglregis, nopendaftaran, jnspendaftaran, tglmsksklh, nis, nopsrtujian, 
          appaud, aptk, noseriskhun, noseriijazah, hobi, citacita) VALUES ('$datetime', '$nopendaftaran', '$jnspendaftaran', '$tglmsksklh', 
          '$nis', '$nopsrtujian', '$appaud', '$aptk', '$noseriskhun', '$noseriijazah', '$hobi', '$citacita')");
          if ($sql) {
              // pesan jika data berhasil tersimpan
              echo "<script>alert('Selanjutnya Mengisi Form Data Pribadi!'); window.location.href='formpribadi.php'
              </script>"; 
            } else {
              // pesan jika data gagal disimpan
                echo "alert('Data Registrasi Gagal Ditambahkan!');";
            }
          }
    }
    
?>

    
</body>

</html>