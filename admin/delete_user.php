<?php
//include database connection file
include_once("../koneksi.php");

//Get id from URL to delete that user
$id = $_GET['id'];

//Delete user row form table based on given id
$result  = mysqli_query($mysqli, "DELETE FROM user WHERE id=$id");

//after delete redirect to home, so that latest user list vill be displayed

header("location:index.php");
?>