<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM akun WHERE id='$id'";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
} else {
    header("Location: index.php");
}
?>