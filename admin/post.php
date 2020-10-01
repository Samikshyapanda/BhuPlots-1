<?php
  include('../config.php');
  session_start();
  $name = mysqli_escape_string ($con,strip_tags($_POST['name']));
  $org = mysqli_escape_string ($con,strip_tags($_POST['org']));
  $location = mysqli_escape_string ($con,strip_tags($_POST['location']));
  $type = mysqli_escape_string ($con,strip_tags($_POST['type']));

  //image file upload

  $image1 = $_FILES['image1']['name'];
  $loc1="plots-images/".$image1;

  $image2 = $_FILES['image2']['name'];
  $loc2="plots-images/".$image2;

  $image3 = $_FILES['image3']['name'];
  $loc3="plots-images/".$image3;

  $price = mysqli_escape_string ($con,strip_tags($_POST['price']));
  $option = mysqli_escape_string ($con,strip_tags($_POST['option']));

  //entering the data into the table
  $plot = "INSERT INTO plot(name,org,location,type,image1,image2,image3,price,option) VALUES('$name','$org','$location','$type','$image1','$image2','$image3','$price','$option')";
	$plot_result=mysqli_query($con,$plot) or die(mysqli_error($con));
  move_uploaded_file($_FILES['image1']['tmp_name'],$loc1);
  move_uploaded_file($_FILES['image2']['tmp_name'],$loc2);
  move_uploaded_file($_FILES['image3']['tmp_name'],$loc3);
	header('Location:success.php');

?>
