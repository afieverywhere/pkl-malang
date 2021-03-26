<?php 
require 'koneksi.php';
if( isset($_POST["submit"]) ) {

	$nama_akun = htmlspecialchars($_POST["nama_akun"]);
	$username = htmlspecialchars($_POST["username"]);
	$password = htmlspecialchars($_POST["password"]);
	$password = md5($password);

	$query = "INSERT INTO register (nama_akun, username, password) VALUES('$nama_akun', '$username', '$password')";

$result = mysqli_query($conn, $query);
	if($result) {
		echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'loginindex.php';
			</script>
		"; 
	}	else {
		echo "
			<script>
				alert('data gagal ditambahkan');
				document.location.href = 'loginindex.php';
			</script>
		";
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrasi</title>
	<style type="text/css">
		fieldset {
  
  display: block;
  margin-left: 30px;
  margin-right: 900px;
  padding-top: 1em;
  padding-bottom: 1em;
  padding-left: 2em;
  padding-right: 2em;
  border: 2px groove (internal value);
}
	</style>
</head>
<body>

	<form action="" method="post">
		<div >
		<fieldset class="underline">
			<legend >registrasi</legend>
		
			<p>
				<label for="nama_akun">Nama Akun</label>
				<br><input type="text" name="nama_akun" required>
			</p>
			<p>
				<label for="username">Username</label >
				<br><input type="text" name="username" required>
			</p>
			<p>
				<label for="password">Password</label>
				<br><input type="password" name="password" value="" id="inputPassword" required>
				<br><br>
    			<input type="checkbox" onclick="myFunction()">Tampilkan Password
			</p>
			<p>
				<button type="submit" name="submit">Tambah!!</button>
			</p>
		
		</fieldset>
		</div>

	</form>
	<script>
        function myFunction() {
            var x = document.getElementById("inputPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</script>
</body>
</html>