<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Pupuk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/double-bubble-dark.png'); 
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center;
            color: #333;
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

        button.create {
            background-color: #4CAF50; 
            color: white;
        }

        button.read {
            background-color: #2196F3; 
            color: white;
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

        .navigation {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
        }

        .navigation a {
            padding: 10px 15px;
            text-decoration: none;
            background-color: #2196F3;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .navigation a:hover {
            background-color: #1976D2;
        }
    </style>
</head>
<body>
    <div class="navigation">
        <a href="create_kalkulator.php" class="create">Create Table</a>
        <a href="../index.php" class="read">Logout</a>
    </div>

    <table border="1" class="table">
        <tr>
            <th>Luas Lahan</th>
            <th>Banyak Pupuk</th>
            <th>Actions</th>
        </tr>
        
        <?php
        // Include the database connection
        include '../koneksi.php';

        // Query to select all entries from the kalkulator_pupuk table
        $query_mysql = mysqli_query($mysqli, "SELECT * FROM kalkulator_pupuk") or die(mysqli_error($mysqli));

        // Loop through the rows and display the data
        while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
            <tr>
                <td><?php echo htmlspecialchars($data['luas_lahan']); ?></td>
                <td><?php echo htmlspecialchars($data['banyak_pupuk']); ?></td>
                <td>
                    <a href='edit_kalkulator.php?id=<?php echo $data['id']; ?>'><button class="update">Edit</button></a>
                    <a href='delete_kalkulator.php?id=<?php echo $data['id']; ?>'><button class="delete">Delete</button></a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
