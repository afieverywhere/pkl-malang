<?php

require 'koneksi.php';

$id = $_GET["id"];

function delete($id) {

    global $conn;
    mysqli_query($conn, "DELETE FROM tb_barang WHERE id_barang = $id");
    return mysqli_affected_rows($conn);
}

if( delete($id) > 0 ) {
    echo "
			<script>
				alert('data berhasil dihapus');
				document.location.href = 'index.php';
			</script>
		";

} else {
    echo "
			<script>
				alert('data gagal dihapus');
				document.location.href = 'index.php';
			</script>
		";

}

?>