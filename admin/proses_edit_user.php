<?php

include("../koneksi.php");

//cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){


    $Nama = $_POST['Nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $email = $_POST['email'];

    // buat query update
    $result=mysqli_query($mysqli,"UPDATE user set Nama='$Nama' , username='$username' , password='$password' , level='$level' ,email='$email'");
    header( 'Location: index.php');
} else {
    die("Akses dilarang...");
}
?>