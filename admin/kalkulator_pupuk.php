<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator pupuk</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #dddddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        button {
            padding: 5px 10px;
            margin: 2px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
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

        .search-bar {
            margin-bottom: 10px;
        }

        .search-bar input[type="text"] {
            padding: 5px;
            font-size: 17px;
            border: 1px solid #ddd;
            border-radius: 3px;
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
        }

        .pagination a.active {
            background-color: #4CAF50;
            color: white;
            border: 1px solid #4CAF50;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <a href="create_kalkulator.php"><button class="create">Create table</button></a>
    <table border="1" class="table">
        <tr>
            <th>id</th>
            <th>id_user</th>
            <th>luas_lahan</th>
            <th>Banyak_pupuk</th>
        </tr>
        
        <?php
        // Include the database connection
        include '../Koneksi.php';

        // Query to select all entries from the fertilizer table
        $query_mysql = mysqli_query($mysqli, "SELECT * FROM kalkulator_pupuk") or die(mysqli_error($mysqli));

        // Variable to iterate through the rows
        $nomor = 1;

        // Loop through the rows and display the data
        while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['id_user']; ?></td>
                <td><?php echo $data['luas_lahan']; ?></td>
                <td><?php echo $data['banyak_pupuk']; ?></td>
                <td>
                    <a href='edit_kalkulator.php?id=<?php echo $data['id']; ?>'><button class="update">Edit</button></a>
                    <a href='delete_kalkulator.php?id=<?php echo $data['id']; ?>'><button class="delete">Delete</button></a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
