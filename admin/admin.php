<?php
  include('../config.php');
  session_start();
  $email = mysqli_escape_string($con,strip_tags($_POST['email']));
  $password = mysqli_escape_string($con,strip_tags($_POST['password']));
  $login = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
  $login_result = mysqli_query($con,$login) or die(mysqli_error($con));
  if(mysqli_num_rows($login_result) > 0) {
    $_SESSION['msg'] = 'You have successfully logged in to your account!';
    header('Location: plots.php');
  } else {
    $_SESSION['msg'] = 'Login unsuccessful!';
    header('Location: index.php');
  }
  $_SESSION['email'] = $email;
?>
