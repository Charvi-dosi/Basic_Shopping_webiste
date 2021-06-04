<?php
require 'common.php';
session_start();

$email=$_POST['email'];
$name=$_POST['name'];
$password=$_POST['password'];
$address=$_POST['address'];
$city=$_POST['city'];
$contact=$_POST['contact'];
if(strpos($email,'@') === false ){
	$_SESSION['error']='Invalid Email(must include @)';
	header('Location: signup.php');
	return;
}
if(strlen($contact)>10){
	$_SESSION['error']='Invalid Contact(not more than 10 digit)';
	header('Location: signup.php');
	return;
}

$result=mysqli_query($sql,"Select id from users where email='$email'");
if(mysqli_num_rows($result)>0){
	$_SESSION['error']='Email id already exist.(please login)';
	header('Location: Login.php');
	return;
}
else{
$x="INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name', '$email', '$password', '$contact', '$city', '$address')";
$row=mysqli_query($sql,$x);
$id=mysqli_insert_id($sql);
$_SESSION['user_id']=$id;
$_SESSION['email']=$email;
header('Location: products.php');
}
?>