<!DOCTYPE html>
<html>
<head>
    <title>Daftar Akun Baru</title>
    <link rel="stylesheet" href="create.css">
</head>
<body>
    <div class="container">
        <h1>Tambahkan Akun Anda</h1>
        <form method="post" name="form" action="create_table.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Role</td>
                    <td><select name="Role" id="Role">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn" type="submit" name="Submit">Kirim</button></td>
                </tr>
            </table>
        </form>
    </div>

    <?php
    if (isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $Role = $_POST['Role'];
        echo ($password);

        include_once ("../koneksi.php");

        $result = mysqli_query($mysqli, "INSERT INTO akun (nama,username,email,password,Role) VALUES ('$nama','$username','$email','$password','$Role')");

        header("location:index.php");

    }
    ?>
</body>
</html>
