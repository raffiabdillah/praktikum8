<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$pesan = $_POST['pesan'];

// Query SQL untuk inser data
$query = "INSERT INTO kontak SET id = '$id', nama = '$nama',jkel = '$jenis_kelamin', email = '$email', alamat='$alamat', kota = '$kota', pesan = '$pesan'";
mysqli_query($koneksi, $query);
//mengalihkan ke halaman index.php
header("location:tambahkontak.php");
?>