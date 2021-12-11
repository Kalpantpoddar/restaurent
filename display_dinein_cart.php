<?php 
include'config.php';
include'get_session_access.php';

	$table_id = $_POST['table_id'];
	$sql_data = "SELECT * FROM dinein_cart WHERE table_id = '$table_id'";
	$run_query = mysqli_query($conn, $sql_data);
	if($run_query-> num_rows > 0){

	while($row = mysqli_fetch_assoc($run_query)) { 

	$output = "<tr class='order_item'>
					<td><me>{$row["food_name"]}</me><input type='hidden' class='foodId' name='food_id' value='{$row["food_id"]}' /></td>
					<td ><input type='number' class='foodqty' name='order_qty' maxlength='10' minlength='1' value='{$row["food_qty"]}' /></td>
					<td><i class='fa fa-inr'></i> <input type='text' class='foodprice price_input' value='{$row["food_price"]}' readonly>/-</td>
					<td><i class='fa fa-inr'></i> <input type='text' class='foodAmount price_input' value='{$row["foodtotal_price"]}' readonly>/-</td>
					<td><a class='delete-btn' data-id='{$row["food_id"]}'><i class='fa fa-trash'></i></a></td>
				</tr>";

	echo $output;
	}
	}
	else{
		echo "<h5>No Record Found.</h5>";
	}


?>
<script type="text/javascript">



</script>
