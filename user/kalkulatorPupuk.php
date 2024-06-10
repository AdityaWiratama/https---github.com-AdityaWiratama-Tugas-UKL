<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Pupuk</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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
        .navbar {
            width: 100%;
            background: rgba(255, 255, 255, 0.1);
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            position: fixed;
            top: 0;
            z-index: 2;
        }
        .navbar ul {
            list-style: none;
            display: flex;
            justify-content: center;
        }
        .navbar ul li {
            margin: 0 20px;
        }
        .navbar ul li a {
            color: #fafafa;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }
        .navbar ul li a:hover {
            color: #90caf9;
        }
        .mainkal {
            width: 50%;
            max-width: 600px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            z-index: 1;
            margin-top: 80px; /* To avoid overlapping with navbar */
        }
        h2 {
            color: #fafafa;
            margin-bottom: 20px;
        }
        label {
            color: #90caf9;
            margin-bottom: 5px;
            display: block;
        }
        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            background-color: rgba(255, 255, 255, 0.1);
            border-bottom: 2px solid #2979ff;
            color: #fff;
            font-size: 18px;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #2979ff;
            font-size: 18px;
            color: #fafafa;
            cursor: pointer;
            transition: background-color 0.3s;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #1c54b2;
        }
        p {
            color: #fafafa;
            margin-top: 20px;
            font-size: 16px;
        }
        footer {
            margin-top: 20px;
            color: #fafafa;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="kalkulatorPupuk.php">Kalkulator Pupuk</a></li>
            <li><a href="userlogin.php">Artikel</a></li>
            <li><a href="../index.php">Logout</a></li>
        </ul>
    </div>
    <div class="mainkal">
        <h2>Kalkulator Pupuk</h2>
        <form method="post">
            <label for="luas_lahan">Luas Lahan (hektar):</label>
            <input type="text" id="luas_lahan" name="luas_lahan" required>
            <label for="dosis_pupuk">Dosis Pupuk per Hektar (kg/hektar):</label>
            <input type="text" id="dosis_pupuk" name="dosis_pupuk" required>
            <input type="submit" value="Hitung">
            <p>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $luas_lahan = $_POST["luas_lahan"];
                $dosis_pupuk = $_POST["dosis_pupuk"];
                if (!is_numeric($luas_lahan) || !is_numeric($dosis_pupuk)) {
                    echo "Masukkan harus berupa angka.";
                } else {
                    $total_pupuk = $luas_lahan * $dosis_pupuk;
                    echo "Total pupuk yang diperlukan: " . $total_pupuk . " kg";
                }
            }
            ?>
            </p>
        </form>
    </div>
    <footer>
        <p>&copy; 2024 Teknologi Pangan. All rights reserved.</p>
    </footer>
</body>
</html>
