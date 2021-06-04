<?php
function check_if_added_to_cart($item_id, $user_id){
require 'common.php';
$row=mysqli_query($sql,"SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' AND status='Added to cart'");
if(mysqli_num_rows($row)>=1){
	return 1;
}
else{
	return 0;
}
}
?>