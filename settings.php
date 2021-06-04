<?php
require 'common.php';
session_start();
if(!isset($_SESSION['email'])){
	header('Location: index.php');
}
?>
<html>
<head>
	<style type="text/css">
		body{
			background-image: url('main_img.jpg');
			background-size: cover;
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
			margin: 30px;
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
	</style>
</head>
<body>
	<?php
		include 'header.php';
	?>
	<div class="box1">
		<div class="box">
	<form action="settings_script.php" method="post">
		<label for="old">Old Password:</label><br>
		<input type="text" name="old"><br>
		<label for="new">New Password:</label><br>
		<input type="text" name="new"><br>
		<label for="retype">Retype New Password:</label><br>
		<input type="text" name="retype"><br><br>
		<input type="submit" value="Change"><br>
	</form>
</div>
</div>
<?php
	include 'footer.php';
?>
</body>
</html>