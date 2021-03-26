<?php 

require("konek/koneksi.php");
//Mengambil data pada table dari database MySQL
$sql = "select * from tb_barang";
$result = mysqli_query($conn, $sql);
//Membuat array
$identitas = array();
while($row = mysqli_fetch_assoc($result))
{
  $identitas[] = $row;
}
//Menampilkan konversi data pada tabel identitas ke format JSON
echo json_encode($identitas);
//close the db connection
mysqli_close($conn);
?>