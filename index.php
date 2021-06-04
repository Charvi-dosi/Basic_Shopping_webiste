<?php
require 'common.php';
if(isset($_SESSION['email'])){
	header('Location :products.php');
}
?>
<html>
<head>
<?php
require 'bootstrap.php';
?>
<title></title>
</head>
<style>
.content{
	min-height: 600px;
}
.banner_image{
	padding-bottom: 50px;
	margin-bottom:20px;
	text-align:center;
	color: #f8f8f8;
	background: url(intro-bg_1.jpg) no-repeat center;
	background-size:cover;
}
.inner_banner_image{
	padding-top: 17%;
	padding-left: 20% ; 
	width:80%;
	margin:auto;
}
.banner_content{
	position: relative; 
	padding-top: 6%; 
	padding-bottom: 6%; 
	overflow:hidden; 
	margin-bottom: 20%; 
	background-color: rgba(0, 0, 0, 0.7); 
	max-width: 660px;
}
.caption{
	text-align:center;
}
.footer{
	text-align: center;
	padding: 10px 0;
	background-color: #101010;
	color: #9d9d9d;
	bottom: 0;
	width: 100%;
}

</style>

<body>
<?php
include 'header.php';
?>
<div class="content">
<div class="banner_image">
<div class="inner_banner_image">
<div class="banner_content">
<h1>We sell lifestyle</h1>
<p>40% OFF on premium brands</p>
<a href="products.php"><button type="button" class="btn btn-danger btn-lg active">Shop Now</button></a>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="thumbnail">
<a href="1.jpg" target="_blank">
<img src="1.jpg" alt="" style="width:100%">
	<div class="caption">
	<h2>Cameras</h2>
	<p>Choose among the best available in the world.</p>
	</div>
</a>
</div>
</div>
<div class="col-md-4">
<div class="thumbnail">
<a href="7.jpg" target="_blank">
<img src="7.jpg" alt="" style="width:100%">
	<div class="caption">
	<h2>Watches</h2>
	<p>Orignal watches from the best brands.</p>
	</div>
</a>
</div>
</div>
<div class="col-md-4">
<div class="thumbnail">
<a href="8.jpg" target="_blank">
<img src="8.jpg" alt="" style="width:100%">
	<div class="caption">
	<h2>Shirts</h2>
	<p>Our exquisite collection of shirts.</p>
	</div>
</a>
</div>
</div>
</div>
</div>
<?php
include 'footer.php';
?>
</html>