<?php
session_start();
if(!isset($_COOKIE['cookie_username']) && !isset($_COOKIE['cookie_password']) ){
  if(isset($_SESSION['login'])){
    if($_SESSION['login'] != 'true'){
      $_SESSION['login'] = 'false';
    }
  }else{
    $_SESSION['login'] = 'false';
  }
}
else{
  $_SESSION['login'] = 'true';
  $_SESSION['username'] = $_COOKIE['cookie_username'];
}
?>