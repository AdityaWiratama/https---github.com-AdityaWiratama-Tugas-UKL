<?php
include("../koneksi.php");

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit();
}

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM kalkulator_pupuk WHERE id=$id");

while ($data = mysqli_fetch_array($result)) {
    $id = $data['id'];
    $luas_lahan = $data['luas_lahan'];
    $banyak_pupuk = $data['banyak_pupuk'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kalkulator Pupuk</title>
    <style>
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f0f0f0;
        }
        .mainkal {
            width: 60%;
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 0 30px rgba(0, 0, 0, .1);
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .container {
            width: 80%;
        }
        .container h1 {
            text-align: left;
            color: #333;
            margin-bottom: 30px;
            text-transform: uppercase;
            border-bottom: 4px solid #2979ff;
        }
        .container label {
            text-align: left;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }
        .container input {
            width: calc(100% - 20px);
            padding: 8px 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 18px;
        }
        .container button {
            width: 100%;
            padding: 10px 0;
            border: none;
            background-color: #2979ff;
            font-size: 18px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .container button:hover {
            background-color: #1c54b2;
        }
    </style>
</head>
<body>
    <div class="mainkal">
        <div class="container">
            <h1>Edit Kalkulator Pupuk</h1>
            <form action="update_kalkulator.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div>
                    <label>Luas Lahan</label>
                    <input type="text" name="luas_lahan" value="<?php echo $luas_lahan; ?>" required>
                </div>
                <div>
                    <label>Banyak Pupuk</label>
                    <input type="text" name="banyak_pupuk" value="<?php echo $banyak_pupuk; ?>" required>
                </div>
                <div>
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <button type="submit" name="simpan">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
