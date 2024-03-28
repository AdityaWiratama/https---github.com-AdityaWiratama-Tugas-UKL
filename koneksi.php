<?php
// name host, username mysql, password mysql
$databaseHost = "localhost";
$databaseName = "teknologi pangan";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect ($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if($mysqli){
    echo ".<br/>";
}else{
    echo "koneksi gagal.<br/>";
}

?>