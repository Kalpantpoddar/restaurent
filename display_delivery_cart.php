<?php 
include'config.php';
include'get_session_access.php';
error_reporting(0);

	$order_type = $_POST['order_type'];
	$sql_data = "SELECT * FROM delivery_cart WHERE order_type = '$order_type'";
	$run_query = mysqli_query($conn, $sql_data);
	if($run_query-> num_rows > 0){

		while($row = mysqli_fetch_assoc($run_query)) {

		$output = "<tr class='order_item'>
					<td><me>{$row["food_name"]}</me><input type='hidden' class='foodId' name='food_id' value='{$row["food_id"]}' /></td>
					<td><input type='number' class='foodqty' name='order_qty' max='10' min='1' value='{$row["food_qty"]}' /></td>
					<td><i class='fa fa-inr'></i> <input type='text' class='foodprice price_input' value='{$row["food_price"]}' readonly>/-</td>
					<td><i class='fa fa-inr'></i> <input type='text' class='foodAmount price_input' value='{$row["foodtotal_price"]}' readonly>/-</td>
					<td><a class='delete-btn' data-id='{$row["food_id"]}'><i class='fa fa-trash'></i></a></td>
				</tr>";

		echo $output;
		}
	}
	else{
		echo "<h5>No Record Found...</h5>";
	}
?>
<script type="text/javascript">

</script>
