<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nama = $_POST['name'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$pass = $_POST['password'];
// query SQL untuk insert data
$query="INSERT INTO log SET nama='$nama', email='$email', 
alamat='$alamat', pass='$pass'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman tampilkontak.php
header("location:signin.php");