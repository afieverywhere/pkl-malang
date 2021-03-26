<?php 
$conn = mysqli_connect("localhost", "root","", "db_kasir");

function query($query){
	global $conn;
	$result =mysqli_query($conn, query);
	$row = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}
 function tambah ($data) {
	global $conn;

	    $invoice_keranjang = $data['invoice_keranjang'];
		$id_barang = $data['id_barang'];
		$id_akun = $data['id_akun'];
		$tgl_keranjang = $data['tgl_keranjang'];

		$query = "INSERT INTO tb_keranjang1
                  VALUES
                  ('', '$invoice_keranjang', '$id_barang', '$id_akun', '$tgl_keranjang')
                  ";            


        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

}
?>