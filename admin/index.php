<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/double-bubble-dark.png');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .navbar a:hover {
            background-color: #555;
        }
        .navbar .create {
            background-color: #4CAF50;
        }
        .navbar .read {
            background-color: #2196F3;
        }
        .navbar .logout {
            background-color: #f44336;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
            background-color: rgba(255, 255, 255, 0.9);
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
        button {
            padding: 10px 15px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button.update {
            background-color: #ff9800;
            color: white;
        }
        button.delete {
            background-color: #f44336;
            color: white;
        }
        button:hover {
            opacity: 0.8;
        }
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
        .edit a, .delete a {
            text-decoration: none;
            color: white;
            padding: 5px 10px;
            border-radius: 3px;
            transition: background-color 0.3s ease;
        }
        .edit a {
            background-color: #ff9800;
        }
        .delete a {
            background-color: #f44336;
        }
        .edit a:hover, .delete a:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="create_table.php" class="create">Create Table</a>
        <a href="kalkulator_pupuk.php" class="read">Kalkulator Pupuk</a>
        <a href="../index.php" class="read">Logout</a>
    </div>
    <table border="1" class="table">
        <tr>
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th>nama</th>
            <th>role</th>
            <th>edit</th>
            <th>delete</th>
        </tr>

        <?php
        // Menggunakan koneksi mysqli atau PDO yang benar
        include '../koneksi.php';

        // Select data dari tabel user
        $query_mysql = mysqli_query($mysqli, "SELECT * FROM akun") or die(mysqli_error($mysqli));

        // Loop untuk menampilkan data dalam tabel
        while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
        <tr>
            <td><?php echo htmlspecialchars($data['username']); ?></td>
            <td><?php echo htmlspecialchars($data['email']); ?></td>
            <td><?php echo htmlspecialchars($data['password']); ?></td>
            <td><?php echo htmlspecialchars($data['nama']); ?></td>
            <td><?php echo htmlspecialchars($data['Role']); ?></td>
            <td class="edit"><a href='edit.php?id=<?php echo urlencode($data['id']);?>'>Edit</a></td>
            <td class="delete"><a href='delete_user.php?id=<?php echo urlencode($data['id']);?>'>Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
