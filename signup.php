<?php
require 'common.php';
session_start();
if(isset($_SESSION['email'])){
	header('Location: products.php');
}
?>

<html
<head>
	<style type="text/css">
		body{
			background-image: url('main_img.jpg');
			background-size: cover;
		}
		h1{
			padding-left: 40%;
		}
		form{
			padding-left: 60px;
		}
		label{
			color: #ffffff;
		}
		input[type=text]{
			width: 80%;
			padding: 6px 30px;
		}
		input[type=number]{
			width: 80%;
			padding: 6px 30px;
		}
		.box1{
			padding-top: 2%;
			padding-left: 20% ; 
			width:80%;
			margin: 4px;
			margin-bottom: 10px;
		}
		.box{
			position: relative; 
			padding-top: 2%; 
			padding-bottom: 5%; 
			overflow:hidden; 
			margin-bottom: 15%; 
			background-color: rgba(0, 0, 0, 0.7); 
			max-width: 660px;
		}
		input[type=submit]{
			width: 20%;
			padding-top: 4px;
			padding-bottom: 4px;
			border: 2px solid black;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<?php
		include 'header.php';
	?><br><br><br>
	<div class='box1'>
		<div class="box">
	<h1 style="color: #ffffff;">Sign Up</h1>
	<?php if(isset($_SESSION['error'])){
		echo '<p style="color:red">'.$_SESSION['error']. "</p>";
		unset($_SESSION['error']);
	} ?>
		<form method="POST" action="signup_script.php">
		<label for="name">Name:</label>
		<input type="text" name="name" required><br><br>
		<label for="email">Email:</label>
		<input type="text" name="email" required><br><br>
		<label for="password">Password:</label>
		<input type="text" name="password" required><br><br>
		<label for="city">City:</label>
		<input type="text" name="city" required><br><br>
		<label for="address">Address:</label>
		<input type="text" name="address" required><br><br>
		<label for="contact">Contact:</label>
		<input type="text" name="contact" required><br><br>
		<input type="submit" value="Sign Up">

		</form><br>
	</div>
	</div>
	<?php
		include 'footer.php'
	?>
</body>
</html>

