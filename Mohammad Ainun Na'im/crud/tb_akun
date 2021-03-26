<?php 
$conn = mysqli_connect('localhost','root','','db_kasir');
$result = mysqli_query($conn,"SELECT * FROM tb_akun");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>db_kasir</title>
</head>
<body>
<h2>Tabel Akun</h2>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>id akun</th>
		<th>username</th>
		<th>passwoard</th>
		<th>nama akun</th>
	</tr>
	<?php while ( $row = mysqli_fetch_assoc($result)): ?>
	<tr>
		<td><?= $row["id_akun"];?></td>
		<td><?= $row["username"];?></td>
		<td><?= $row["passwoard"];?></td>
		<td><?= $row["nama_akun"];?></td>
		<td>
			<a href="edit">
			<a href="hapus">
		</td>
		
	</tr>	
	<?php endwhile; ?>
</table>	
</body>
</html>