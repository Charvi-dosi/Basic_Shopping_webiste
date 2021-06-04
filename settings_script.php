<?php
require 'common.php';
session_start();
if (!isset($_SESSION['email'])) {
	header('Location: index.php');
}
else{
	$old=$_POST['old'];
	$new=$_POST['new'];
	$y="SELECT * FROM users WHERE password='$old'";
	$result=mysqli_query($sql,$y);
	if(mysqli_num_rows($result)==0){
		header('Location: settings.php');
	}
	else{
		$row = $result -> fetch_array(MYSQLI_ASSOC);
		$name=$row['name'];
		$x="UPDATE users SET password='$new' WHERE name='$name'";
		mysqli_query($sql,$x);
		header('Location: settings.php');
	}
}