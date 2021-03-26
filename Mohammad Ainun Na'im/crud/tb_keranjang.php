<?php 
include_once("koneksi.php");
$result = mysqli_query($conn,"SELECT * FROM tb_keranjang1");
 ?>

<!DOCTYPE html>
<html>	
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>db_kasir</title>
</head>
<body>
<h2>Tabel Keranjang</h2>
<a href="tambah.php">
		<tr>
			<td><button type="submit" name="submit">Tambah Keranjang</button></td>
		</tr>
</a>
<br><br>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>Id Keranjang</th>
		<th>Invoice Keranjang</th>
		<th>Id Barang</th>
		<th>Id Akun</th>
		<th>Tgl Keranjang</th>
		<th>Edit</th>
	</tr>
	<?php while ( $row = mysqli_fetch_assoc($result)): ?>
	<tr>
		<td><?= $row["id_keranjang"];?></td>
		<td><?= $row["invoice_keranjang"];?></td>
		<td><?= $row["id_barang"];?></td>
		<td><?= $row["id_akun"];?></td>
		<td><?= $row["tgl_keranjang"];?></td>
		<td>
			<button><a href="edit.php?id=<?= $row["id_keranjang"];?>">edit</a></button>
			<button><a href="hapus.php?id=<?= $row["id_keranjang"];?>" onclick="return confirm ('Anda yakin ingin menghapusnya??')";fadzz>hapus</a></button> 
		</td>
	</tr>	
	<?php endwhile; ?>
</table>	
</body>
</html>