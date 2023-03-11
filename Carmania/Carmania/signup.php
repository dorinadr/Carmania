<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];






		if(!empty($user_name) && !empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) && !is_numeric($user_name))
		{

	
			$user_id = random_num(20);
			$query = "insert into users (user_id, user_name, first_name, last_name, email, password) values ('$user_id','$user_name', '$first_name', '$last_name', '$email','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Incorrect Input, Try Again!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title> CarMania</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,
600&family=Roboto&family=Roboto+Mono:ital,wght@0,400;1,200&display=swap"
rel="stylesheet">
<link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style type="text/css">

body{
  background-image: url("css/images/carshop.jpeg");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
}
#bg {
 padding: 3%;
 width: 25%;
  color: #e3e3e3;
  border-radius: 30px 30px 30px 30px;
  background-color: rgba(0, 0, 0, 0.5);
 box-shadow: 0 0 50px #91231c;
 
}



</style>
</head>
<body>

		<nav>
         <div class="nav-links" id="navLinks">
           <i class="fa fa-times" onclick="hideMenu()"></i>
           <ul id="MenuItems">
             <li><a href="index.html">HOME</a></li>
             <li><a href="cars.html">CARS</a></li>
             <li><a href="car_parts.html">CAR PARTS</a></li>
             <li><a href="about.html">ABOUT</a></li>
             <li><a href="cart.html">CART</a></li>
             <li><a href="signup.php">SIGN-UP</a></li>
             <li><a href="login.php">LOG IN</a></li>
          </ul>
        </nav>
	
		<center>
			
		<form method="post" id ="bg" class="input-group-login" style="margin-left: 39%; margin-right: 39%;">
			<h2 style="color: ghostwhite;"><ins><b>Signup</b></ins></h2>
			<br>
			<input style="color: ghostwhite; font-size: 130%;" id="text" type="text" name="user_name" class="input-field" placeholder="Enter Username..."><br><br>
			<input style="color: ghostwhite; font-size: 130%;" id="text" type="text" name="first_name" class="input-field" placeholder="Enter Firstname..."><br><br>
			<input style="color: ghostwhite; font-size: 130%;" id="text" type="text" name="last_name" class="input-field" placeholder="Enter Lastname..."><br><br>
			<input style="color: ghostwhite; font-size: 130%;" id="text" type="text" name="email" class="input-field" placeholder="Enter Email..."><br><br>
			<input style="color: ghostwhite; font-size: 130%;" id="text" type="password" name="password" class="input-field" placeholder="Enter Password..."><br><br>
			<input style="color: ghostwhite; font-size: 130%;" id="button" type="submit"class="submit-btn" value="Signup"><br><br>

			<a href="login.php" style="color: #3598de;">Click Here to Login</a><br><br>
		</form>
	</center>
</body>
</html>