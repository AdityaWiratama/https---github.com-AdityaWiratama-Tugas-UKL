<?php
include("../koneksi.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate input
    $id = intval($_POST['id']);
    $id_user = intval($_POST['id_user']);
    $luas_lahan = intval($_POST['luas_lahan']);
    $banyak_pupuk = intval($_POST['banyak_pupuk']);

    // Prepare and execute the query
    $query = "INSERT INTO kalkulator_pupuk (id, id_user, luas_lahan, banyak_pupuk) VALUES ($id, '$id_user', '$luas_lahan', '$banyak_pupuk')";
    if (mysqli_query($mysqli, $query)) {
        header("Location: kalkulator_pupuk.php");
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
}
?>
