<?php 
require 'common.php';
session_start();
?>

<?php

$email=$_POST['email'];
$password=$_POST['password'];
$result=mysqli_query($sql,"Select id, email from users where email='$email' and password='$password'");
if(mysqli_num_rows($result)==0){
	$_SESSION['error']='Email Id does not exist(please signup first)';
	header('Location: signup.php');
	return;
}
else{
$row = $result -> fetch_array(MYSQLI_ASSOC);
$_SESSION['email']=$row["email"];
$_SESSION['user_id']=$row["id"];
header('Location: products.php');
}

?>