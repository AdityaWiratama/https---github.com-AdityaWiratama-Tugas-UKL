<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Teknologi Pangan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            outline: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }
        body {
            height: 100vh;
            background-image: url('https://images.unsplash.com/photo-1615391542887-c579ed3c674e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fHwxNjk1NzUyMzI0&ixlib=rb-4.0.3&q=80&w=1080');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            padding: 20px 25px;
            width: 300px;
            background-color: rgba(0, 0, 0, .7);
            box-shadow: 0 0 15px rgba(255, 255, 255, .3);
            border-radius: 10px;
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
        }
        .container form input, .container form select {
            width: calc(100% - 20px);
            padding: 8px 10px;
            margin-bottom: 15px;
            border: none;
            background-color: transparent;
            border-bottom: 2px solid #2979ff;
            color: #fff;
            font-size: 16px;
        }
        .container form button {
            width: 100%;
            padding: 10px 0;
            border: none;
            background-color: #2979ff;
            font-size: 18px;
            color: #fafafa;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .container form button:hover {
            background-color: #1e5bbf;
        }
        .container p {
            margin-top: 10px;
            color: #fafafa;
        }
        .container p a {
            color: #90caf9;
            text-decoration: none;
        }
        .container p a:hover {
            text-decoration: underline;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input class="form-control" type="text" name="nama" placeholder="Nama kamu" />
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Alamat Email" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" name="Role">
                    <option value="user">User</option>
                </select>
            </div>
            <button class="btn btn-success btn-block" type="submit" name="Submit" value="Submit">Register</button>
        </form>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </div>

    <?php
    if (isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $Role = $_POST['Role'];

        include_once('koneksi.php');

        $query_sql = mysqli_query($mysqli, "INSERT INTO akun (nama, username, email, password, Role) VALUES ('$nama', '$username', '$email', '$password', '$Role')");

        header("Location: index.php");
    }
    ?>
</body>
</html>
