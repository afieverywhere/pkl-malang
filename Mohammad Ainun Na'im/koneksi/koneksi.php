<?php 
$host="localhost";
$user="root";
$pass="";
$db="db_kasir";

$conn =mysqli_connect ($host,$user,$pass,$db);

if(!$conn) {
	die("koneksi_gagal:" . mysql_connect_eror);
}
 //echo "koneksi_berhasil";
 //mysqli_close ($conn);
?>