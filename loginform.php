<?php 

	session_start();
	if(isset($_SESSION["email"])){
		header('location:userpage.php');

	}

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$con=@mysqli_connect('127.0.0.1',"root","","bhuplots") or die("connection failed");
		$email=$_POST["email"];
		$password=$_POST["password"];
		$result=mysqli_query($con,"select * from user where email='$email' and password='$password'");
		if ($arr=mysqli_fetch_array($result)) {
			if ($arr["email"]==$email&&$arr["password"]==$password) {

				$_SESSION["email"]=$email;
				header('location:userpage.php');
				
			} else {
				header('location:index.php');
			}
			
		}
		
	}
 ?>