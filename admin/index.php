<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Reset some default browser styles */
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

/* Style for action buttons */
button {
    padding: 5px 10px;
    margin: 2px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
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

/* Optional: Style for a search bar above the table */
.search-bar {
    margin-bottom: 10px;
}

.search-bar input[type="text"] {
    padding: 5px;
    font-size: 17px;
    border: 1px solid #ddd;
    border-radius: 3px;
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
<a href="create_table.php"><button>create Table</button></a>
<a href="kalkulator_pupuk.php"><button>kalkulator pupuk</button></a>
<table border="1" class="table">
    <tr>
        <th>id</th>
        <th>username</th>
        <th>nomor</th>
        <th>email</th>
        <th>password</th>:
        <th>nama</th>
        <th>role</th>
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
            <td class="delete"><a href='delete_user.php?id=<?php echo $data['id'];?>' background-color(#dff774)>Delete</a></td>
            <td>
                <!-- Isi kolom aksi sesuai dengan kebutuhan -->
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>