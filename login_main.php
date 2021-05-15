<?php
require "seesion_and_cookie.php";
require "DB_connect.php";
require "login.php";
if($_SESSION['login'] == 'true' ){
  header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <style>
      body{
        display: flex;
        justify-content: end;
      }
      .container{
        height: 100vh;
      }
  </style>
</head>
<body class="bg-info">
  
  <div class="container bg-info"></div>
  <div class="container bg-light">
    <h1 class="text-center">Login Form</h1>
    <table class="table">
      <form action="" method="POST">
        <tr>
          <td>username</td>
          <td><input class="form-control" name="username" type="text"></td>
        </tr>
        <tr>
          <td>password</td>
          <td><input class="form-control" name="password" type="password"></td>
        </tr>
        <tr>
          <td>cookie <input class="form-check-input" type="checkbox" value="" name="cookie_input" id="flexCheckDefault"></td>
          <td><button type="submit" name="btn_login" class="btn btn-outline-primary">login</button></td>
        </tr>
      </form>

    </table>
  </div>

  <script src="bootstrap.min.js"></script>
</body>
</html>