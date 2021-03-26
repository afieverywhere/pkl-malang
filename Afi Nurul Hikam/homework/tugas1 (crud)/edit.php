<?php
    require 'koneksi.php';
	$brg = $_GET["id"];
    $data = mysqli_query($conn, "SELECT * FROM tb_barang WHERE id_barang = '$brg'");

	if(isset ($_GET["submit"])) {
		
		$id_barang = htmlspecialchars($_GET["id"]);
		$nama_barang = htmlspecialchars($_GET["nama_barang"]);
		$harga_barang = htmlspecialchars($_GET["harga_barang"]);
		$bobot_barang = htmlspecialchars($_GET["bobot_barang"]);
	
		$query = "UPDATE tb_barang SET nama_barang='$nama_barang',harga_barang='$harga_barang',bobot_barang='$bobot_barang' WHERE id_barang='$id_barang'";
		$result = mysqli_query($conn, $query);
		
		if($result) {
			echo "
				<script>
					alert('data berhasil diubah!');
					document.location.href = 'index.php';
				</script>
			";
		}	else {
			echo "
				<script>
					alert('data gagal diubah!');
					document.location.href = 'index.php';
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
    <title>Edit Data</title>
</head>
<body>

<h1>Daftar Barang</h1>

<form action"" method"get">

<?php while( $row = mysqli_fetch_assoc($data) ) : ?>
	<ul>
		<li>
			<label for="nama_barang">Nama Barang : </label>
			<input type="text" name="nama_barang" id="nama_barang" required value="<?= $row["nama_barang"]; ?>">
		</li>
		<li>		
			<label for="harga_barang">Harga Barang : </label>
			<input type="text" name="harga_barang" id="harga_barang" required value="<?= $row["harga_barang"]; ?>">
		</li>
		<li>
			<label for="bobot_barang">Bobot Barang : </label>
			<input type="text" name="bobot_barang" id="bobot_barang" required value="<?= $row["bobot_barang"]; ?>">
		</li>
			<input type="hidden" name="id" id="id" value="<?= $brg ?>">
			<button type="submit" name="submit">Edit Data</button>
	</ul>
<?php endwhile; ?>

</form>


</body>
</html>