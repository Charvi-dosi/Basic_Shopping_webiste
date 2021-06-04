<?php
require 'common.php';
session_start();
$user_id=$_SESSION['user_id'];
?>
<?php
include 'header.php';
include 'check_if_added.php';
?>
<html>
<head>
<title></title>
</head>
<body>
<h3>ADD</h3><br>
<div class="container">
<div class="jumbotron">
<h1>Welcome to our Lifestyle Store!</h1>
<p>We have best cameras, watches and shirts for you. No need to Hunt around, we have all in one place</p></div>
<div class="row">
<div class="col-lg-3">
	<div class="thumbnail">
		<img src="5.jpg" alt="" style="width:100%">
		<div class="caption"><center>
		<h3><b>Cannon EOS</b></h3>
		<p>Price:Rs.36000.00</p>
		<?php 
		if (isset($_SESSION['email'])) { 
			
			if (check_if_added_to_cart(1,$user_id)) {
		 	 echo '<a href="#" class="btn btn-block btn-success" disabled> Added to cart </a>'; }
		 	else { ?>
			 <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary"> Add to cart </a>
		<?php } }  
		else { ?>
			<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		<?php  } ?>
		</div>
	</div>
</div>
<div class="col-lg-3">
	<div class="thumbnail">
		<img src="2.jpg" alt="" style="width:100%">
		<div class="caption"><center>
		<h3><b>Sony DSLR</b></h3>
		<p>Price:Rs.40000.00</p>
		<?php if (isset($_SESSION['email'])) { 
			if (check_if_added_to_cart(2,$user_id)) {
		 	 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
		 	else { ?>
			 <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
		<?php } }  
		else { ?>
			<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		<?php  } ?>		
		</div>
	</div>
</div>
<div class="col-lg-3">
	<div class="thumbnail">
		<img src="3.jpg" alt="" style="width:100%">
		<div class="caption"><center>
		<h3><b>Sony DSLR</b></h3>
		<p>Price:Rs.50000.00</p>
		<?php if (isset($_SESSION['email'])) { 
			if (check_if_added_to_cart(3,$user_id)) {
		 	 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
		 	else { ?>
			 <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
		<?php } }  
		else { ?>
			<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		<?php  } ?>
		</div>
	</div>
</div>
<div class="col-lg-3">
	<div class="thumbnail">
		<img src="4.jpg" alt="" style="width:100%">
		<div class="caption"><center>
		<h3><b>Olympus DSLR</b></h3>
		<p>Price:Rs.80000.00</p>
		<?php if (isset($_SESSION['email'])) { 
			if (check_if_added_to_cart(4,$user_id)) {
		 	 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
		 	else { ?>
			 <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
		<?php } }  
		else { ?>
			<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		<?php  } ?>
		</div>
	</div>
</div>
</div>
<div class="row">
<div class="col-lg-3">
	<div class="thumbnail">
		<img src="9.jpg" alt="" style="width:100%">
		<div class="caption"><center>
		<h3><b>Titan Model #301</b></h3>
		<p>Price:Rs.13000.00</p>
		<?php if (isset($_SESSION['email'])) { 
			if (check_if_added_to_cart(5,$user_id)) {
		 	 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
		 	else { ?>
			 <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
		<?php } }  
		else { ?>
			<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		<?php  } ?>
		</div>
	</div>
</div>
<div class="col-lg-3">
	<div class="thumbnail">
		<img src="10.jpg" alt="" style="width:100%">
		<div class="caption"><center>
		<h3><b>Titan Model #201</b></h3>
		<p>Price:Rs.3000.00</p>
		<?php if (isset($_SESSION['email'])) { 
			if (check_if_added_to_cart(6,$user_id)) {
		 	 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
		 	else { ?>
			 <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
		<?php } }  
		else { ?>
			<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		<?php  } ?>
		</div>
	</div>
</div>
<div class="col-lg-3">
	<div class="thumbnail">
		<img src="11.jpg" alt="" style="width:100%">
		<div class="caption"><center>
		<h3><b>HMT Milan</b></h3>
		<p>Price:Rs.8000.00</p>
		<?php if (isset($_SESSION['email'])) { 
			if (check_if_added_to_cart(7,$user_id)) {
		 	 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
		 	else { ?>
			 <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
		<?php } }  
		else { ?>
			<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		<?php  } ?>
		</div>
	</div>
</div>
<div class="col-lg-3">
	<div class="thumbnail">
		<img src="12.jpg" alt="" style="width:100%">
		<div class="caption"><center>
		<h3><b>Faber Luba #111</b></h3>
		<p>Price:Rs.180000.00</p>
		<?php if (isset($_SESSION['email'])) { 
			if (check_if_added_to_cart(8,$user_id)) {
		 	 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
		 	else { ?>
			 <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
		<?php } }  
		else { ?>
			<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		<?php  } ?>
		</div>
	</div>
</div>
</div>
<div class="row">
<div class="col-lg-3">
	<div class="thumbnail">
		<img src="8.jpg" alt="" style="width:100%">
		<div class="caption"><center>
		<h3><b>H&W</b></h3>
		<p>Price:Rs.800.00</p>
		<?php if (isset($_SESSION['email'])) { 
			if (check_if_added_to_cart(9,$user_id)) {
		 	 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
		 	else { ?>
			 <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
		<?php } }  
		else { ?>
			<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		<?php  } ?>
		</div>
	</div>
</div>
<div class="col-lg-3">
	<div class="thumbnail">
		<img src="6.jpg" alt="" style="width:100%">
		<div class="caption"><center>
		<h3><b>Luis Phill</b></h3>
		<p>Price:Rs.1000.00</p>
		<?php if (isset($_SESSION['email'])) { 
			if (check_if_added_to_cart(10,$user_id)) {
		 	 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
		 	else { ?>
			 <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
		<?php } }  
		else { ?>
			<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		<?php  } ?>
		</div>
	</div>
</div>
<div class="col-lg-3">
	<div class="thumbnail">
		<img src="13.jpg" alt="" style="width:100%">
		<div class="caption"><center>
		<h3><b>John Zok</b></h3>
		<p>Price:Rs.1500.00</p>
		<?php if (isset($_SESSION['email'])) { 
			if (check_if_added_to_cart(11,$user_id)) {
		 	 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
		 	else { ?>
			 <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
		<?php } }  
		else { ?>
			<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		<?php  } ?>
		</div>
	</div>
</div>
<div class="col-lg-3">
	<div class="thumbnail">
		<img src="14.jpg" alt="" style="width:100%">
		<div class="caption"><center>
		<h3><b>Jhalsani</b></h3>
		<p>Price:Rs.1300.00</p>
		<?php if (isset($_SESSION['email'])) { 
			if (check_if_added_to_cart(12,$user_id)) {
		 	 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
		 	else { ?>
			 <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
		<?php } }  
		else { ?>
			<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		<?php  } ?>
		</div>
	</div>
</div>
</div>
</div>
</body>
</html>