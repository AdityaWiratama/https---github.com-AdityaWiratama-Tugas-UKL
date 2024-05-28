<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Pupuk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://images.unsplash.com/photo-1582735680197-d8f6b1bfc016?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80'); /* Background image from Unsplash */
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
    <a href="create_kalkulator.php"><button class="create">Create table</button></a>
    <table border="1" class="table">
        <tr>
            <th>id</th>
            <th>id_user</th>
            <th>luas_lahan</th>
            <th>Banyak_pupuk</th>
            <th>actions</th>
        </tr>
        
        <?php
        // Include the database connection
        include '../Koneksi.php';

        // Query to select all entries from the fertilizer table
        $query_mysql = mysqli_query($mysqli, "SELECT * FROM kalkulator_pupuk") or die(mysqli_error($mysqli));

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
            