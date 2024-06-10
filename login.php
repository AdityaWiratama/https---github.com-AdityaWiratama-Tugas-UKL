<?php
// Mengaktifkan sesi pada PHP
session_start();
include 'koneksi.php';

// Mendapatkan input dari formulir login
$username = $_POST['user'];
$password = $_POST['pass'];

// Melakukan query untuk memeriksa username dan password
$login = mysqli_query($mysqli, "SELECT * FROM `akun` WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_array($login);

    // Cek jika user login sebagai admin
    if ($data['Role'] == 'admin') {
        // Buat sesi login dan username
        $_SESSION['username'] = $username;
        $_SESSION['Role'] = 'admin';
        // Alihkan ke halaman dashboard admin
        header("Location: admin/index.php");
        exit;
    } else if ($data['Role'] == 'user') {
        // Buat sesi login dan username
        $_SESSION['username'] = $username;
        $_SESSION['Role'] = 'user';
        // Alihkan ke halaman user
        header("Location: user/Landing_Page.php");
        exit;
    }
} else {
    // Jika login gagal, alihkan kembali ke halaman login dengan pesan gagal
    header("Location: index.php?pesan=gagal");
    exit;
}
?>
