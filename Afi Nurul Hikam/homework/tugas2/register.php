<?php

    require 'koneksi.php';
//proses
    if(isset($_POST['btn_user'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
   
//script validasi data

    $cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM tb_user WHERE nama='$nama' or username='$username'"));
    if ($cek > 0){
    echo "<script>window.alert('Nama atau Username Already Exists')
    window.location='register.php'</script>";
    }else {
    mysqli_query($conn,"INSERT INTO tb_user(id,nama,username, password)
    VALUES ('','$nama','$username','$password')");

    echo "<script>window.alert('DATA SUDAH DISIMPAN')
    window.location='login.php'</script>";
    }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <div class="register1">
        <form method="POST" action="" id="form">
            <div class="register2">
                <label>Registrasi</label>
            </div>
            <div class="input-group">
                <input type="text" name="nama" placeholder="Nama" required>
            </div>
            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="btn_user">REGISTER</button>
            </div>
            <p>
  		        Back To <a href="login.php">Login</a>
  	        </p>
        </form>
        </div>
    </body>
</html>