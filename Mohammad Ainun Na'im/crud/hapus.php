<?php 
require 'koneksi.php';
$id = $_GET["id"];
function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_keranjang1 WHERE id_keranjang = $id");
	return mysqli_affected_rows($conn);
}
if (hapus ($id) > 0) {

	echo "
			<script>
				alert('data berhasil dihapus');
				document.location.href = 'tb_keranjang.php';
			</script>
		";		
}else {
	echo "
			<script>
				alert('data gagal dihapus');
				document.location.href = 'tb_keranjang.php';
			</script>
		";
}

?>

