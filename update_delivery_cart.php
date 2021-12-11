<?php 
include'config.php';
include'get_session_access.php';
include'function.php';

$food_id = $_POST['food_id'];
$food_qty = $_POST['food_qty'];
$food_price = $_POST['food_price'];
$foodtotal_price = $food_qty * $food_price;
// $food_qty = $_POST['food_qty'];
$ip_add = getUserIp();

$sql_update = "UPDATE delivery_cart SET `food_qty` = '$food_qty', `foodtotal_price` = '$foodtotal_price' WHERE `ip_add` = '$ip_add' AND `food_id` = '$food_id'";
$run_sql = mysqli_query($conn, $sql_update);
if ($run_sql) {
	$total_price = $total_price + $foodtotal_price;
	$status =  $total_price;
}
else{
	$status = '<div class="alert alert-danger" role="alert" data-auto-dismiss="3000">Item data not updated.</div>';
}

echo $status;
?>
<script type="text/javascript">
	cart_display();
</script>