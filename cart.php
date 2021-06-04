<?php
require 'common.php';
session_start();
?>
<html>
<head></head>
<body>
	<?php
		if(isset($_SESSION['email']))
		{
			$user=$_SESSION['user_id'];
			include 'header.php';?><br><br><br><br>
			<?php
			$x="select items.id, items.name, items.price from items inner join users_items on items.id=users_items.item_id where user_id='$user' AND status='Added to cart'";
			$result=mysqli_query($sql,$x);
			if(mysqli_num_rows($result)==0)
			{
				echo 'Add item to cart first!';
			}
			else{
				$sum=0;
				while($rows=$result->fetch_assoc()) {
					$price=$rows['price'];
					$id=$rows['id'];
					$name=$rows['name'];
					$sum=$sum+$rows['price'];
					echo $id.' '.$name.' '.$price;?> <a href='cart-remove.php?id= <?php echo $id; ?>' > Remove </a><br>			
				<?php
				} ?>
				<p>Total: <?php echo $sum; ?><p>
				<a href="success.php?">Buy Now</a>
			<?php
			}
		} ?>
</body>