<?php
require 'common.php';
session_start();
$id=$_GET['id'];
$user_id=$_SESSION['user_id'];
$x="DELETE FROM users_items where user_id='$user_id' AND item_id='$id'";
mysqli_query($sql,$x);
header('Location: cart.php');
?>