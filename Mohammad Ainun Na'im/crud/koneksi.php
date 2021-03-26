<?php

$servername = "localhost";
$database = "db_kasir";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} 

?>

<?php 

//	global.$conn;
//	$result.=.mysqli_query($conn,.$query);
//	$rows.=.[];
//	while(.$row.=.mysqli_fetch_assoc($result).).{
//		$row[].=.$row;
///	}
	//return.$rows
 ?>