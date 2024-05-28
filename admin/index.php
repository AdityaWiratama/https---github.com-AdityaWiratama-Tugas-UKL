<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/double-bubble-dark.png'); /* Background pattern from Toptal Subtle Patterns */
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center;
            color: #333;
        }

        /* Reset some default browser styles */
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
            background-color: rgba(255, 255, 255, 0.9); /* Slight transparency for table background */
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #dddddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Style for action buttons */
        button {
            padding: 10px 15px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button.create {
            background-color: #4CAF50; /* Green */
            color: white;
        }

        button.read {
            background-color: #2196F3; /* Blue */
            color: white;
        }

        button.update {
            background-color: #ff9800; /* Orange */
            color: white;
        }

        button.delete {
            background-color: #f44336; /* Red */
            color: white;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Optional: Style for pagination */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid #ddd;
            margin: 0 4px;
            transition: background-color 0.3s ease;
        }

        .pagination a.active {
            background-color: #4CAF50;
            color: white;
            border: 1px solid #4CAF50;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }

        /* Style links inside table cells */
        .edit a, .delete a {
            text-decoration: none;
            color: white;
            padding: 5px 10px;
            border-radius: 3px;
            transition: background-color 0.3s ease;
        }

        .edit a {
            background-color: #ff9800; /* Orange */
        }

        .delete a {
            background-color: #f44336; /* Red */
        }

        .edit a:hover, .delete a:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <a href="create_table.php"><button class="create">Create Table</button></a>
    <a href="kalkulator_pupuk.php"><button class="read">Kalkulator Pupuk</button></a>
    <table border="1" class="table">
        <tr>
            <th>id</th>
            <th>username</th>
            <th>nomor</th>
            <th>email</th>
            <th>password</th>:
            <th>nama</th>
            <th>role</th>
            <th>edit</th>
            <th>delete</th>
        </tr>

        <?php
        // Menggunakan koneksi mysqli atau PDO yang benar
        include '../Koneksi.php';

        // Select data dari tabel user
        $query_mysql = mysqli_query($mysqli, "SELECT * FROM akun") or die(mysqli_error($mysqli));

        // Variabel nomor dimulai dari 1
        $nomor = 1;

        // Loop untuk menampilkan data dalam tabel
        while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><?php echo $data['nama']; ?></td> <!-- Kolom Nama -->
            <td><?php echo $data['Role']; ?></td> <!-- Kolom Role -->
            <td class="edit"><a href='edit.php?id=<?php echo $data['id'];?>'>Edit</a></td>
            <td class="delete"><a href='delete_user.php?id=<?php echo $data['id'];?>'>Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
