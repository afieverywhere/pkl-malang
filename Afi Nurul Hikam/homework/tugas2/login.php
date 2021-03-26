<?php

session_start(); // Start session nya

// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
  header("location: welcome2.php"); // Kita Redirect ke halaman welcome.php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<div style="color: red;margin-bottom: 15px;">
		<?php
		// Cek apakah terdapat cookie dengan nama message
		if(isset($_COOKIE["message"])){ // Jika ada
			echo $_COOKIE["message"]; // Tampilkan pesannya
		}
		?>
		
	</div>
        <div class="login1">
        <form method="POST" action="action.php" id="form">
            <div class="login2">
                <label>Login</label>
            </div>
            <div class="input-group">
                <input type="text" name="username" placeholder="Username" id="username" required>
            </div>
            <div class="input-group">
                <input type="password" class="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="show-password"> Show Password
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="btn_user">LOGIN</button>
            </div>
            <p>
  		        Do not have Account ? <a href="register.php">Register</a>
  	        </p>
        </form>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
	        $(document).ready(function(){		
		        $('#show-password').click(function(){
			if($(this).is(':checked')){
				$('#password').attr('type','text');
			}else{
				$('#password').attr('type','password');
			}
		    });
	        });
        </script>
    </body>
</html>