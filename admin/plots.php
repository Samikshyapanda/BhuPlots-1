<?php
  include('../config.php');
  session_start();
  $msg = $_SESSION['msg'];
  if (!isset($_SESSION['email'])) {
    header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Post details about the plot!</title>
    <link rel="icon" href="../assets/img/logo.png" type="image/gif" sizes="16x16">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/signin.css" rel="stylesheet">

    <style>
      .login-box{
        height: 1100px !important;
        width: 500px !important;
      }
      @media screen and (max-width: 600px){
        .login-box{
          height: 1200px !important;
        }
      }
    </style>

  </head>
  <body class="text-center">
    <!--Posting plots details box-->
    <div class="login-box">
      <form action="post.php" method="post" enctype="multipart/form-data">
        <div class="alert alert-success">Welcome <?php echo $_SESSION['email']; ?>&nbsp; <a href="logout.php">Logout</a></div>
        <h4 class="admin">Post details about the plot!</h4><br/>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
          <small id="nameHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="organisation">Organisation Name</label>
          <input type="text" id="org" name="org" class="form-control">
          <small id="orgHelp" class="form-text text-muted">Enter the organisation name</small>
        </div>
        <div class="form-group">
          <label for="location">Location</label>
          <input type="text" id="location" name="location" class="form-control">
          <small id="locationHelp" class="form-text text-muted">Enter the location</small>
        </div>
        <div class="form-group">
          <label for="type">Type of Property</label>
          <input type="text" id="type" name="type" class="form-control">
          <small id="typeHelp" class="form-text text-muted">Enter the type of the property</small>
        </div>
        <div class="form-group">
          <label for="image1">Enter images for the plot</label>
          <input type="file" class="form-control-file" id="image1" name="image1">
        </div>
        <div class="form-group">
          <label for="image2"></label>
          <input type="file" class="form-control-file" id="image2" name="image2">
        </div>
        <div class="form-group">
          <label for="image1"></label>
          <input type="file" class="form-control-file" id="image3" name="image3">
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="text" id="price" name="price" class="form-control">
          <small id="priceHelp" class="form-text text-muted">Enter the price of the plot</small>
        </div>
        <div class="form-check">
        <p>Account type</p>
        <input class="form-check-input" type="radio" name="option" id="option" value="premium" checked>
        <label class="form-check-label" for="option1">
          Premium
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="option" id="option" value="regular">
        <label class="form-check-label" for="option2">
          Regular
        </label>
      </div>
        <button type="submit" class="btn btn-primary">Post</button>
      </form><br/><br/><br/>
  </body>
</html>
