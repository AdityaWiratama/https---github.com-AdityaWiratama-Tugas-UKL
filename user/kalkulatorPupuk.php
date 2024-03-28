<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Pupuk</title>
    <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}
body{
    min-height: 100vh;
    align-items: center;
    background-image: url(https://kuliahdimana.id/public/news/93fde88731f0a6e723004a54a7a9475e.jpg);
    background-size: cover;
    background-position: center;
}

.mainkal{
    position: absolute;
    width: 400px;
    height: 470px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .5);
    border-radius: 20px;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 30px rgba(0, 0, 0, .5);
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    right:500;
    z-index: 1;
}

</style>
</head>
<body>

<div class="mainkal">
<h2>Kalkulator Pupuk</h2>
<form method="post">
    <label for="luas_lahan">Luas Lahan (hektar):</label><br>
    <input type="text" id="luas_lahan" name="luas_lahan" required><br>
    <label for="dosis_pupuk">Dosis Pupuk per Hektar (kg/hektar):</label><br>
    <input type="text" id="dosis_pupuk" name="dosis_pupuk" required><br><br>
    <input type="submit" value="Hitung">
</form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $luas_lahan = $_POST["luas_lahan"];
    $dosis_pupuk = $_POST["dosis_pupuk"];

    // Cek apakah input berupa angka
    if (!is_numeric($luas_lahan) || !is_numeric($dosis_pupuk)) {
        echo "Masukkan harus berupa angka.";
    } else {
        // Hitung total pupuk yang diperlukan
        $total_pupuk = $luas_lahan * $dosis_pupuk;
        echo "Total pupuk yang diperlukan: " . $total_pupuk . " kg";
    }
}
?>

</body>
</html>