    <?php
 include 'koneksi.php';
$email = $_POST['email'];
$pass = $_POST['password'];

 $sql = "SELECT * FROM log WHERE pass= '$pass' and email= '$email'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("location:formvalidasi.php");
    } else {
        header("location:salah.php");
    }
?>


