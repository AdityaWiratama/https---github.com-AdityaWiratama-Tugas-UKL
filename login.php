<?php
//mengaktifkan session pada php
session_start();
include 'koneksi.php';

$username = $_POST['user'];
$password = $_POST['pass'];

$login = mysqli_query($mysqli,"select * from tabel_pengguna where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if($data['Role']=="admin"){

        // buat session login dan username
        $_session['username'] = $username;
        $_session['Role'] = "admin";
        //alihkan ke halaman dashboard admin
        header("location:admin/index.php");

    //cek jika user login sebagai user
    }else if($data['Role']=="user"){
        //buat session login dan username
        $_session['username'] = $username;
        $_session['Role'] = "user";
        //alihkan ke halaman login kembali
        header("location:user/userlogin.php");

    }else{
        //alihkan ke halaman login
        header("location:userlogin.php");
    }
}else{
    header("location:index.php?pesan=gagal");
}
?>