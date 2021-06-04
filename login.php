<?php 
require 'common.php';
session_start();
if(isset($_SESSION['email'])){
	header('Location: products.php');
}
?>
<html>
<head>
	<style type="text/css">
		body{
			background-image: url('main_img.jpg');
			background-size: cover;
		}
		h1{
			padding-left: 60px;
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
		.box1{
			padding-top: 5%;
			padding-left: 20% ; 
			width:80%;
			margin: 15px;
			margin-bottom: 10px;
		}
		.box{
			position: relative; 
			padding-top: 4%; 
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
		.echo_style{
			color: red;
		}
	</style>
</head>
<body>
	<?php
		include 'header.php';
	?>
	<div class="box1">
	<div class="box">
	<h1 style="color: #ffffff;">LOGIN TO MAKE PURCHASE</h1>
	<?php if(isset($_SESSION['error'])){
		echo '<div class="echo_style">'.$_SESSION['error']. "</div>";
		unset($_SESSION['error']);
	} ?> 
	<form method='POST' action='login_submit.php'>
	<label for="email">Email:</label><br>
	<input type="text" size="40" name="email" required><br>
	<label for="password">Password:</label><br>
	<input type="text" size="40" name="password" required><br><br>
	<input type="submit" value="Login">
	</form></div></div>
	<?php
		include 'footer.php';
	?>
</body>
</html>