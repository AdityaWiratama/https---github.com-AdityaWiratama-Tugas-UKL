<?php
            include("index.php");

            if (isset($_POST['simpan'])) {
                    $ID = $_POST['ID_user'];
                    $Nama = $_POST['Nama'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $level = $_POST['level'];
                    $email = $_POST['email'];
                    var_dump($Nama);

                    include_once("koneksi.php");

                    $result=mysqli_query($mysqli,"UPDATE user set Nama='$Nama' , username='$username' , password='$password' , level='$level' ,email='$email'");
                    header( 'Location: index.php');
            }
