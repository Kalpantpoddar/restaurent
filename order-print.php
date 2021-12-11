<?php
include'config.php';
include'get_session_access.php';
include'function.php';

$cust_phone = $_SESSION['customer_phone'];
$cust_name = $_SESSION['customer_name'];
$sum_amount = $_SESSION['sum_amount'];

$tableId = "";
$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
$order_date = $date->format('Y-m-d H:i:s');
echo $order_date;

$ip_add = getUserIp();

if ($_SESSION['tableId'] != "") {
	$order_type = "dine_in";
	$tableId = $_SESSION['tableId'];
	$tableId;

	$check_ordr = "SELECT * FROM dinein_order WHERE customer_phone = '$cust_phone' AND order_date = '$order_date' AND customer_ip = '$ip_add'";
	$check_result = mysqli_query($conn, $check_ordr);
	if($check_result->num_rows == "") {

		if ($_SESSION['tableId'] != ""){
			
			$payment_status = "paid";

			$insrt_order = "INSERT INTO dinein_order
			(order_id, table_id, customer_phone, total_payment, payment_status, order_date, customer_ip) 
			VALUES('', '$tableId', '$cust_phone', '$sum_amount', '$payment_status', '$order_date', '$ip_add')";

			$run_ordr = mysqli_query($conn, $insrt_order) or die(mysqli_error($conn));
			if ($run_ordr){
				echo "<script>alert('customer_dinein_order data inserted');</script>";
			}
			else{
				echo "<script>alert('customer_dinein_order data not inserted');</script>";
			}

			$edit_table = mysqli_query($conn, "UPDATE restro_tables SET table_status = '0' WHERE table_id = '$tableId'");
			if (!$edit_table) {
				echo "<script>alert('Table Status not updated.')</script>";
			}

		}
		else{
			echo "<script>alert('No table Id found.');</script>";
		}
	}
	else{
		echo "<script>alert('Data already uploaded.');</script>";
	}

	$view_orderlist = mysqli_query($conn, "SELECT * FROM dinein_order WHERE table_id = '$tableId' AND customer_phone = '$cust_phone' AND order_date = '$order_date' AND customer_ip = '$ip_add'"); 
	$ordr = mysqli_fetch_assoc($view_orderlist); 
	$order_id = $ordr['order_id'];
}
else{
	echo "<script>alert('data not found.');</script>"; 
}

$show_kot = "SELECT * FROM kitchen_orderlist WHERE order_id = '$order_id' AND order_date = '$order_date' AND cust_phone = '$cust_phone' AND order_type = '$order_type'";
$run_kot = mysqli_query($conn, $show_kot);


if($run_kot->num_rows == "") {
		
	$insrt_kot = mysqli_query($conn, "INSERT INTO kitchen_orderlist(kot_id, kot_status, cust_phone, order_id, order_date, order_type) VALUES('', '0', '$cust_phone', '$order_id', '$order_date', '$order_type')") or die(mysqli_error($conn));
	if ($insrt_kot){
		echo "<script>alert('kitchen_orderlist data inserted');</script>";
	}
	else{
		echo "<script>alert('kitchen_orderlist data not inserted');</script>";
	}
}
else{
	echo "<script>alert('data already exist in kitchen_orderlist List.');</script>"; 	
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Encode Restaurent - Admin Dashboard </title>
    <?php include'style.php'; ?>
</head>
<body class="print_page">
    <div id="main-wrapper">
		
        <div class="print_div">
        	<div class="print_img">
            	<img src="images/icons/coffee-cup.jpg" class="img-fluid">
            </div>
            <h4>Encode Restaurent</h4>
            <table class="order_summary">
            	<tr>
            		<td><h5><?php echo $cust_name; ?></h5></td>
            		<td>+91 <?php echo $cust_phone; ?></td>
            	</tr>
            	<tr>
            		<td><?php echo ucfirst($order_type); ?></td>
					<?php echo '<td>Table No.: Table '. $tableId .'</td>';
					?>
            		
            	</tr>
            	<tr>
            		<td>Ordered:</td>
            		<td><?php echo $order_date;?></td>
            	</tr>
            </table>
            <table>
            	<tbody>
<?php
$sql_cust_details = mysqli_query($conn, "SELECT * FROM table_orderlist WHERE customer_phone = '$cust_phone'");
while ($res = mysqli_fetch_assoc($sql_cust_details)) {

?>
				<tr>
					<td><?php echo $res['food_name']; ?> (<i class="fa fa-inr"></i> <?php echo $res['food_price']; ?>)</td>
					<td><?php echo $res['food_qty']; ?></td>
					<td><i class="fa fa-inr"></i> <?php echo $res['order_subtotal']; ?></td>
				</tr>
<?php
$foodId = $res['food_id'];
$foodQty = $res['food_qty'];
echo $foodQty;
$edit_food_qty = "UPDATE food_item SET food_qty = food_qty-'$foodQty' WHERE food_id = '$foodId'";
$run_edit_qty = mysqli_query($conn, $edit_food_qty) or die($conn);
if ($run_edit_qty){
	echo "<script>alert('food_qty {$foodQty} of {$res['food_name']} deducted.');</script>";
}
else{
	echo "<script>alert('Food Qty{$food_qty} not deeducted.');</script>";
}
}
?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2">Total Amount</td>
					<td><i class="fa fa-inr"></i> <?php echo $sum_amount; ?></td>
				</tr>
			</tfoot>
			</table>
			<div class="print_img my-2">
            	<img src="images/icons/qr-code.png" class="img-fluid">
            </div>
           	<div class="print_footer">
           		<h4>GET DETAILS</h4>
	            <!-- <p>Scan With phone camera to pay</p> -->
	            <p class="p_end">Thank You</p>
	            <a href="./" class="fs-13"><u><strong>Encoders Restro</strong></u>...</a>
           	</div>
	            



        </div>

    <?php include'footer.php'; ?>
	
</body>
</html>