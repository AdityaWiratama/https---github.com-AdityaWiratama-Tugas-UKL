<table border="1" class="table">
    <tr>
        <th>No</th>
        <th>username</th>
        <th>email</th>
        <th>password</th>
        <th>Nama</th>
        <th>Role</th>
    </tr>
    
    <?php
    // Menggunakan koneksi mysqli atau PDO yang benar
    include '../Koneksi.php';

    // Select data dari tabel user
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM tabel_pengguna ") or die(mysqli_error($mysqli));

    // Variabel nomor dimulai dari 1
    $nomor = 1;

    // Loop untuk menampilkan data dalam tabel
    while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><?php echo $data['Nama']; ?></td> <!-- Kolom Nama -->
            <td><?php echo $data['Role']; ?></td> <!-- Kolom Role -->
            <td class="edit"><a href='edit.php?id=<?php echo $data['user_id'];?>'>Edit</a></td>
            <td class="delete"><a href='delete.php?id=<?php echo $data['user_id'];?>' background-color(#dff774)>Delete</a></td>
            <td>
                <!-- Isi kolom aksi sesuai dengan kebutuhan -->
            </td>
        </tr>
    <?php } ?>
</table>
