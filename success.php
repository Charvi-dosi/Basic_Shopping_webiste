<?php
	require 'common.php';
	session_start();
	if(!isset($_SESSION['email'])){
		header('Location: index.php');
	}
	else{
		$user=$_SESSION['user_id'];
		$x="UPDATE users_items SET status='Confirmed' WHERE user_id='$user'";
		mysqli_query($sql,$x); ?>
		<p>Youe order is confirmed. Thank you for shopping with us. <a href="products.php">Click Here</a> to purchase other item:)</p>
	<?php
	} ?>


