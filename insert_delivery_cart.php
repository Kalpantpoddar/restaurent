<?php 
include'config.php';
include'get_session_access.php';
include'function.php';
error_reporting(0);

$food_id = $_POST['food_id'];
$food_name = $_POST['food_name'];
$food_price = $_POST['food_price'];
$food_qty = $_POST['food_qty'];
$order_type = $_POST['order_type'];
$ip_add = getUserIp();

$check = "SELECT * FROM delivery_cart WHERE food_id = '$food_id' AND order_type = '$order_type' AND ip_add = '$ip_add'";
$res = mysqli_query($conn, $check);
$data = mysqli_fetch_array($res, MYSQLI_NUM);
if($data[0] > 1) {
    $status = '<div class="alert alert-danger" role="alert" data-auto-dismiss="3000">Item already added.</div>';
}
else{
	$sql_insert = "INSERT INTO delivery_cart(deliveryCart_id, order_type, food_id, food_name, food_price, food_qty, ip_add) VALUES('','$order_type', '$food_id', '$food_name', '$food_price', '$food_qty', '$ip_add')";
	$run_sql = mysqli_query($conn, $sql_insert);
	if ($run_sql) {
		$status = '<div class="alert alert-success" role="alert" data-auto-dismiss="3000">Item added to cart.</div>';
	}
	else{
		$status = '<div class="alert alert-success" role="alert" data-auto-dismiss="3000">Item not added.</div>';
	}
}

echo $status;
?>