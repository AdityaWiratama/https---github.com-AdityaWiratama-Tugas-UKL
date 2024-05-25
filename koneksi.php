<?php
// name host, username mysql, password mysql
$databaseHost = "localhost";
$databaseName = "teknologi_pangan_2";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect ($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if($mysqli){
    //echo "keneksi<br/>";
}else{
    echo "koneksi gagal.<br/>";
}

?>