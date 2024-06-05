<?php
    include("../koneksi.php");

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $Role = $_POST['Role'];
        
        $result=mysqli_query($mysqli, "UPDATE akun SET nama='$nama', email='$email', username='$username', password='$password', Role='$Role' WHERE id=$id");
        header('Location: index.php');

        // Menggunakan prepared statement untuk melindungi dari SQL injection
        // if ($stmt = $mysqli->prepare("UPDATE akun SET nama=$nama, email=$email, username=$username, password=$password, Role=$Role WHERE id=$id")) {
        //     $stmt->bind_param("sssssi", $nama, $email, $username, $password, $Role, $id);

        //     if ($stmt->execute()) {
        //         // Redirect setelah berhasil memperbarui data
        //         header('Location: index.php');
        //         exit();
        //     } else {
        //         echo "Error: " . $stmt->error;
        //     }

        //     $stmt->close();
        // } else {
        //     echo "Error: " . $mysqli->error;
        // }

        $mysqli->close();
    }
?>
