<?php
    include("../koneksi.php");

    if (!isset($_GET['id'])) {
        header('Location: index.php');
        exit();
    }

    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM akun WHERE id=$id");

    while ($user_data = mysqli_fetch_array($result)) {
        $nama = $user_data['nama'];
        $email = $user_data['email'];
        $username = $user_data['username'];
        $password = $user_data['password'];
        $Role = $user_data['Role'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Akun</title>
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
            background-image: url('https://images.unsplash.com/photo-1601758171292-f7f1563aef2e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDR8fGZpZWxkfGVufDB8fHx8MTYyMzA5Nzk1Nw&ixlib=rb-1.2.1&q=80&w=1080'); /* Replace with an appropriate background image */
            background-size: cover;
            background-position: center;
        }
        .mainkal {
            width: 60%;
            max-width: 600px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
            padding: 40px;
            color: #fff;
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
            background-color: transparent;
            border-bottom: 2px solid #2979ff;
            color: #fff;
            font-size: 20px;
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
            <h1>Edit Akun</h1>
            <form action="edit2.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div>
                    <label>Nama</label>
                    <input type="text" name="nama" value="<?php echo $nama; ?>">
                </div>
                <div>
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo $email; ?>">
                </div>
                <div>
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $username; ?>">
                </div>
                <div>
                    <label>Password</label>
                    <input type="text" name="password" value="<?php echo $password; ?>">
                </div>
                <div>
                    <label>Role</label>
                    <input type="text" name="Role" value="<?php echo $Role; ?>">
                </div>
                <div>
                    <button type="submit" name="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
