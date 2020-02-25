<?php 
	
if($_SERVER["REQUEST_METHOD"]=="POST"){
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$pno=$_POST['pno'];


		$con=@mysqli_connect('127.0.0.1',"root","","bhuplots") or die("connection failed");
		mysqli_query($con,"insert into user values('$fname','$lname','$email','$password','$pno')");

		header('location:login.php');
	}


 ?>