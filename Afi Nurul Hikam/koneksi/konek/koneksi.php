<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_kasir";

$conn = mysqli_connect($host,$user,$pass,$db);

if (!$conn) {
    die ("Connect Failed: " . mysqli_connect_error());
}
    // echo "Connected Successfully";
    // mysqli_close($conn);
?>