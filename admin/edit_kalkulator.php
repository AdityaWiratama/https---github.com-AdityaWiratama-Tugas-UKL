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
    $id_user = $data['id_user'];
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
    background: linear-gradient(120deg, #0f2027, #203a43, #2c5364);
    overflow: hidden;
    position: relative;
}

body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('https://kuliahdimana.id/public/news/93fde88731f0a6e723004a54a7a9475e.jpg') center/cover no-repeat;
    opacity: 0.3;
    z-index: -1;
}

.mainkal {
    width: 60%;
    background: rgba(255, 255, 255, 0.1);
    border: 2px solid rgba(255, 255, 255, 0.2);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: relative;
}

.mainkal::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, #2979ff, #1c54b2, #2979ff);
    background-size: 300% 300%;
    animation: gradientAnim 5s ease infinite;
    z-index: 1;
    opacity: 0.2;
}

@keyframes gradientAnim {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

.container {
    width: 80%;
    position: relative;
    z-index: 2;
}

.container h1 {
    text-align: left;
    color: #fafafa;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #2979ff;
}

.container label {
    text-align: left;
    color: #90caf9;
    display: block;
    margin-bottom: 5px;
}

.container input {
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: rgba(255, 255, 255, 0.1);
    border-bottom: 2px solid #2979ff;
    color: #fff;
    font-size: 18px;
}

.container button {
    width: 100%;
    padding: 10px 0;
    border: none;
    background-color: #2979ff;
    font-size: 18px;
    color: #fafafa;
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
                <input type="hidden" name="id_kalkulator" value="<?php echo $id; ?>">
                <div>
                    <label>id User</label>
                    <input type="text" name="id_user" value="<?php echo $id_user; ?>" required>
                </div>
                <div>
                    <label>Luas Lahan</label>
                    <input type="text" name="luas_lahan" value="<?php echo $luas_lahan; ?>" required>
                </div>
                <div>
                    <label>Banyak Pupuk</label>
                    <input type="text" name="banyak_pupuk" value="<?php echo $banyak_pupuk; ?>" required>
                </div>
                <div>
                    <input type="hidden" name="id" value="<?php echo $_GET ['id'];?>">
                    <button type="simpan" name="simpan">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
