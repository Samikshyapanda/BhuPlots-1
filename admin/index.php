<?php
  include('../config.php');
  session_start();
  if(isset($_SESSION['email'])) {
    header('Location: plots.php');
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Admin Login</title>
    <link rel="icon" href="../assets/img/logo.png" type="image/gif" sizes="16x16">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
    <link rel="stylesheet" href="../assets/css/admin.css">
<link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/signin.css" rel="stylesheet">
  </head>
<body class="text-center">
  <div class="login-box">
    <form action="admin.php" method="post" enctype="multipart/form-data">
      <h4 class="admin">Admin Console</h4><br/>
      <div class="form-group">
        <label for="email">Email ID</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Enter your email</small>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control">
        <small id="passwordHelp" class="form-text text-muted">Enter your password</small>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>
