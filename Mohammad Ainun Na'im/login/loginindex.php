<?php
session_start(); // Start session nya


// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
  header("location: welcome.php"); // Kita Redirect ke halaman welcome.php
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style type="text/css">
    body {
      background-image: url(foto/foto.jpg);
      background-repeat: no-repeat; 
      background-size: 100%;
    }
    a {
      text-decoration: none;
    }
    label {
      font-family: "Raleway", sans-serif;
      font-size: 11pt;
    }
    #card{
      background: #fbfbfb;
      border-radius: 8px;
      box-shadow: 1px 2px 8px rgba(0,0,0,0.65);
      height: 420px;
      margin: 6rem auto 8.1rem auto;
      width: 329px;
    }
    #card-content {
      padding: 12px 44px;
    }
    #card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center; 
    }
    .underline-title {
      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 89px;
    }
    
    #forgot-pass {
      color: #2bdb6e;
      font-family: "Raleway", sans-serif;
      font-size: 10pt;
      margin-top: 3px;
      text-align: right; 
    }
    .form {
      align-items: left;
      display: flex;
      flex-direction: column;
    }
    .form-border {
            background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
        height: 1px;
        width: 100%;
    }
    .form-content {
      background: #fbfbfb;
      border: NONE;
      outline: none;
      padding-top: 4px;
    }
    #signup {
      color: #2dbd6e;
      font-family: "Raleway", sans-serif;
      font-size: 10pt;
      margin-top: 16px;
      text-align: center;
    }
    #submit-btn {
            background: -webkit-linear-gradient(right, #FF0000, #FFFF00);
            border: none;
            border-radius: 41px;
            box-shadow: 0px 1px 8px #24c64f;
            cursor: pointer;
            color: white;
            font-family: "Raleway SemiBold", sans-serif;
            height: 42.3px;
            margin: 0 auto;
            margin-top: 20px;
            transition: 0.25s;
            width: 153px;
        }
        #submit-btn: hover {
          box-shadow: 0px 1px 18px #24c64f;
        }
        .inputBox input{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
        background: transparent;
        padding: 0 10px;
        font-family:times new roman;
        font-size: 16px;
        box-sizing: border-box;
        border-radius: 8px;
    }
    #toggle{
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        width: 25px;
        height: 25px;
        background: url(foto/show.png);
        background-size: cover;
        cursor: pointer;
    }
    #toggle.hide{
        background: url(foto/hide.png);
        background-size: cover;
    }



  </style>


</head>

<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form" action="login.php">
        <label for="username" style="padding-top:13px">
            &nbsp;Username
        </label>
        <input id="username" class="form-content" type="text" name="username" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="password" style="padding-top:22px">
          &nbsp;Password
        </label>
        <input id="password" value="" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
      <input type="checkbox" onclick="myFunction()">Tampilkan Password
      <div style="color: red; margin-top: 20px;">
              <?php
              // Cek apakah terdapat cookie dengan nama message
              if(isset($_COOKIE["message"])){ // Jika ada
                echo $_COOKIE["message"]; // Tampilkan pesannya
              }
              ?>
          </div>
        <button id="submit-btn" type="submit" name="submit">login</button>
        <br>
        <a href="register.php" align="center" >buat akun baru</a>    
   </form>
          
    </div>
  </div>
 <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>