<?php
require 'common.php';
session_start();
$item_id=$_GET['id'];
$user_id=$_SESSION['user_id'];
mysqli_query($sql,"INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')");
header('Location: products.php');
?>