<?php 
include'config.php';
include'get_session_access.php';
$food_id = $_POST['food_id'];
$order_type = $_POST['orderType'];
$status = "";

if ($order_type != "") {
	$sql_delete= "DELETE FROM delivery_cart WHERE food_id = '$food_id' AND order_type = '$order_type'";
	$run_sql = mysqli_query($conn, $sql_delete);
	if ($run_sql) {
		$status = '<div class="alert alert-success" role="alert" data-auto-dismiss="3000">Delivery item deleted from cart.</div>';
	}
	else{
		$status = '<div class="alert alert-danger" role="alert" data-auto-dismiss="3000">Delivery item not deleted.</div>';
	}
}
else{
	$sql_delete= "DELETE FROM dineIn_cart WHERE food_id = '$food_id'";
	$run_sql = mysqli_query($conn, $sql_delete);
	if ($run_sql) {
		$status = '<div class="alert alert-success" role="alert" data-auto-dismiss="3000">Dine_in item deleted from cart.</div>';
	}
	else{
		$status = '<div class="alert alert-danger" role="alert" data-auto-dismiss="3000">Dine_in item not deleted.</div>';
	}
}

	

echo $status;
?>
<script type="text/javascript">
	cart_display();
</script>