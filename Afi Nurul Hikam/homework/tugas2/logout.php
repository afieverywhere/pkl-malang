<?php
session_start(); // Start session nya
if(session_destroy()) { // Hapus semua session
    header("location: login.php"); // Redirect ke halaman index.php
}
?>
