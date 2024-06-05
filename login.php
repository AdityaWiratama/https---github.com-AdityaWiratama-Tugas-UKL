<?php
//mengaktifkan session pada php
session_start();
include 'koneksi.php';

$username = $_POST['user'];
$password = $_POST['pass'];

$login = mysqli_query($mysqli,"SELECT * FROM `akun` WHERE username='adit' AND password='admin';");
$cek = mysqli_num_rows($login);

if($cek > 0){

    $data = mysqli_fetch_array($login);

    // cek jika user login sebagai admin
    if($data['Role'] == 'admin'){

        // buat session login dan username
        $_session['username'] = $username;
        $_session['Role'] = "admin";
        //alihkan ke halaman dashboard admin
        header("location:admin/index.php");
    //cek jika user login sebagai user
    }else if($data['Role'] == 'user'){
        //buat session login dan username
        $_session['username'] = $username;
        $_session['Role'] = "user";
        //alihkan ke halaman login kembali
        header("location:user/Landing_Page.php");

    }
    // }else{
    //     //alihkan ke halaman login
    //     header("location:Landing_Page.php");
    // }
}else{
    header("location:index.php?pesan=gagal");
}
?>