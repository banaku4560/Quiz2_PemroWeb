<?php
require "seesion_and_cookie.php";
if($_SESSION['login'] == 'false' ){
  header("Location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="bg-info">
  <div class="container bg-light">
    <h1 class="text-center"> user = <?= $_SESSION['username'] ?> </h1>
    <?php
    if(isset($_COOKIE['cookie_username'])){ ?>
      <h1 class="text-center">Status Cookie aktif</h1>
      <h1 class="text-center">Cookie akan habis pada menit <?= $_COOKIE['cookie_masa_tenggang'] ?> kedepan </h1>
    <?php
    }
    else{ ?>
      <h1 class="text-center">Status Cookie tidak aktif</h1>
    <?php
    }
    ?>

  </div>


  
<script src="bootstrap.min.js"></script>
</body>
</html>