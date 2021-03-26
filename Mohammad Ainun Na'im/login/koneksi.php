<?php

$servername = "localhost";
$database = "login";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
 
//function delete($id) {
//	global $conn;
//	mysqli_query($conn, "DELETE FROM login WHERE register = $id");
//	return mysqli_affected_rows($conn);
//}
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} 

?>
