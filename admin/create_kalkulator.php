<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Kalkulator Pupuk</title>
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
            <h1>Create Kalkulator Pupuk</h1>
            <form action="insert_kalkulator.php" method="post">
                <div>
                    <label>ID kalkulator</label>
                    <input type="text" name="id_user" required>
                </div>
                <div>
                    <label>ID user</label>
                    <input type="text" name="luas_lahan" required>
                </div>
                <div>
                    <label>luas lahan</label>
                    <input type="text" name="banyak_pupuk" required>
                </div>
                <div>
                    <label>Banyak pupuk</label>
                    <input type="text" name="banyak_pupuk" required>
                </div>
                <div>
                    <button type="submit" name="submit">Create</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
