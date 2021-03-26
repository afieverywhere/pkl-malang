<?php
    require 'koneksi.php';
    $result = mysqli_query($conn, "SELECT * FROM tb_barang");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>

<h1>Daftar Barang</h1>

<a href="add.php">Tambah Data</a>
<br>
<br>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>ID Barang</th>
        <th>Nama Barang</th>
        <th>Harga Barang</th>
        <th>Bobot Barang</th>
        <th>Aksi</th>
    </tr>

<?php while( $row = mysqli_fetch_assoc($result) ) : ?>    
    <tr>
        <td><?= $row["id_barang"]; ?></td>
        <td><?= $row["nama_barang"]; ?></td>
        <td><?= $row["harga_barang"]; ?></td>
        <td><?= $row["bobot_barang"]; ?></td>
        <td>
            <a href="edit.php?id=<?= $row["id_barang"]; ?>">Edit</a> |
            <a href="delete.php?id=<?= $row["id_barang"]; ?>">Hapus</a>
        </td>
    </tr>
<?php endwhile; ?>    
</table>


</body>
</html>