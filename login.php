<?php

if(isset($_POST['btn_login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cookie_values = [$username,$password];

  
  // echo $username." ".$password;
  $input_validation = mysqli_query($DB_connect,"SELECT * FROM data_user WHERE username = '$username' and password = '$password'");
  if(mysqli_num_rows($input_validation)){
    if(isset($_POST['cookie_input'])){
      setcookie("cookie_username",$username,time()+300);
      setcookie("cookie_password",$password,time()+300);
      setcookie("cookie_masa_tenggang"  ,gmdate("i:s",time()+300)  ,time()+300);
    }
    $_SESSION['login'] = 'true';
    $_SESSION['username'] = $username;
    
  }else{
    echo "<script>alert('username atau password salah')</script>";
  }

  
}
?>