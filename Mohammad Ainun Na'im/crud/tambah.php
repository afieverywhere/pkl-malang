<?php 
require 'koneksi.php';
if( isset($_POST["submit"]) ) {

	$id_keranjang = htmlspecialchars($_POST["id_keranjang"]);
	$invoice_keranjang = htmlspecialchars($_POST["invoice_keranjang"]);
	$id_barang = htmlspecialchars($_POST["id_barang"]);
	$id_akun = htmlspecialchars($_POST["id_akun"]);
	$tgl_keranjang = htmlspecialchars($_POST["tgl_keranjang"]);

	$query = "INSERT INTO tb_keranjang1 (invoice_keranjang, id_barang, id_akun, tgl_keranjang) VALUES('$invoice_keranjang', '$id_barang', '$id_akun', '$tgl_keranjang')";

$result = mysqli_query($conn, $query);
	if($result) {
		echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'tb_keranjang.php';
			</script>
		"; 
	}	else {
		echo "
			<script>
				alert('data gagal ditambahkan');
				document.location.href = 'tb_keranjang.php';
			</script>
		";
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Keranjang</title>
</head>
<body>
	<h1>Tambah Keranjang</h1>

	<form action="" method="post">
		<table border="0">
		<tr>
			<td>
				<label for="invoice_keranjang">Invoice Keranjang</label>
			</td>
			<td>:</td>
			<td>
				<input type="text" name="invoice_keranjang" required>
			</td>
		</tr>	
		<tr>
			<td>
				<label for="id_barang">Id Barang</label >
			</td>
			<td>:</td>
			<td>	
				<input type="text" name="id_barang" required>
			</td>
		</tr>
		<tr>
			<td>
				<label for="id_akun">Id Akun</label>
			</td>
			<td>:</td>
			<td>
				<input type="text" name="id_akun" required>
			</td>
		</tr>
		<tr>
			<td>
				<label for="tgl_keranjang">Tgl Keranjang</label>
			</td>
			<td>:</td>
			<td>	
				<input type="date" name="tgl_keranjang" required>
			</td>
		</tr>
		<tr>
			<td><button type="submit" name="submit">Tambah!!</button></td>
		</tr>
		</table>

	</form>

</body>
</html>