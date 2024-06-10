<?php

include("../koneksi.php");

//cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $id_user = $_POST['id_user'];
    $luas_lahan = $_POST['luas_lahan'];
    $banyak_pupuk = $_POST['banyak_pupuk'];

    // buat query update
    $result= mysqli_query($mysqli,"UPDATE kalkulator_pupuk set id_user='$id_user' , luas_lahan='$luas_lahan' , banyak_pupuk='$banyak_pupuk' where id=$id");
    header( 'Location: kalkulator_pupuk.php');
} else {
    die("Akses dilarang...");
}
?>