<?php 
require 'koneksi.php';

	$id = $_GET["id"];
	$data = mysqli_query($conn, "SELECT * FROM tb_keranjang1 WHERE id_keranjang='$id'");

if( isset($_POST["submit"]) ) {
	$id_keranjang		= htmlspecialchars($_POST["id_keranjang"]);
	$invoice_keranjang 	= htmlspecialchars($_POST["invoice_keranjang"]);
	$id_barang 			= htmlspecialchars($_POST["id_barang"]);
	$id_akun 			= htmlspecialchars($_POST["id_akun"]);
	$tgl_keranjang 		= htmlspecialchars($_POST["tgl_keranjang"]);

	$query ="UPDATE tb_keranjang1 SET
	invoice_keranjang	='$invoice_keranjang',
	id_barang			='$id_barang', 
	id_akun				='$id_akun', 
	tgl_keranjang		='$tgl_keranjang'
	WHERE 
	id_keranjang		='$id'
	";
$result = mysqli_query($conn, $query);
	if($result) {
		echo "
			<script>
				alert('Data Berhasil Diedit');
				document.location.href = 'tb_keranjang.php';
			</script>
		"; 
	}	else {
		echo "
			<script>
				alert('Data Gagal Diedit');
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
	<title>Edit Keranjang</title>
</head>
<body>
	<h1>Edit Keranjang</h1>	
	<form action="" method="post">	
		<table border="0">
			<?php  while($row = mysqli_fetch_assoc($data)) : ?>
		<tr>
			<td>
				<label for="invoice_keranjang">Invoice Keranjang</label>
			</td>
			<td>:</td>
			<td>
				<input type="text" name="invoice_keranjang" required value="<?= $row["invoice_keranjang"];?>">
			</td>
		</tr>	
		<tr>
			<td>
				<label for="id_barang">Id Barang</label >
			</td>
			<td>:</td>
			<td>	
				<input type="text" name="id_barang" required value="<?= $row["id_barang"];?>">
			</td>
		</tr>
		<tr>
			<td>
				<label for="id_akun">Id Akun</label>
			</td>
			<td>:</td>
			<td>
				<input type="" name="id_akun" required value="<?= $row["id_akun"];?>">
			</td>
		</tr>
		<tr>
			<td>
				<label for="tgl_keranjang">Tgl Keranjang</label>
			</td>
			<td>:</td>
			<td>	
				<input type="date" name="tgl_keranjang" id="tgl_keranjang" required value="<?= $row["tgl_keranjang"];?>">
			</td>
		</tr>
		<tr>		
			<td><input type="hidden" name="id" id = "id" value="<?= ["$id"];?>">
				<button type="submit" name="submit">Edit Data!!</button></td>
		</tr>
		<?php  endwhile; ?>
		</table>
	</form>
</body>
</html>