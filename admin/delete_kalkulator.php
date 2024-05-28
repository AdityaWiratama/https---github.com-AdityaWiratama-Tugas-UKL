<?php
include("../koneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM kalkulator_pupuk WHERE id=$id";
    mysqli_query($mysqli, $query);

    header("Location: index.php");
}
?>
