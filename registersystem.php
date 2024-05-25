<?php
if (isset($_POST['submit'])) {
    
    $nama = $_POST ['nama'];
    $username = $_POST ['username'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];
    $level = $_POST ['level'];
    
    include_once('koneksi.php');

$query_sql = mysqli_query($mysqli,"INSERT INTO akun_2(nama, username, email, password, level)
VALUES('$nama', '$username', '$email', '$password', '$level')");

header("location:index.php");

}
?>