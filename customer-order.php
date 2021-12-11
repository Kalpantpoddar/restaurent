<?php
include'config.php';
include'get_session_access.php';
include'function.php';
error_reporting(0);

if (isset($_POST['print_order'])) {
	$customer_phone = $_POST['customer_phone'];
	$customer_name = $_POST['customer_name'];
	$customer_address = $_POST['customer_address'];
	$customer_locality = $_POST['customer_locality'];
	
	$_SESSION['tableId'] = $_POST['table_Id'];
	$_SESSION['order_type'] = 'dine_in';
	$_SESSION['customer_phone'] = $_POST['customer_phone'];
	$_SESSION['customer_name'] = $_POST['customer_name'];


	$table_Id = $_POST['table_Id'];
	$total_price = $_POST['total_price'];
	$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
	$order_date = $date->format('Y-m-d H:i:s');
	echo $order_date;
	$ip_add = getUserIp();

	$view_order_cart = "SELECT * FROM dinein_cart";
	$run_query_table = mysqli_query($conn, $view_order_cart);
	
	while($row = mysqli_fetch_assoc($run_query_table)) { 
		$food_id = $row['food_id'];
		$food_name = $row['food_name'];
		$food_price = $row['food_price'];
		$food_qty = $row['food_qty'];
		$foodtotal_price = $row['foodtotal_price'];

	$check_order = "SELECT * FROM table_orderlist WHERE table_id = '$table_Id' AND food_id = '$food_id' AND ip_add = '$ip_add'";
	$check_result = mysqli_query($conn, $check_order);
	$data = mysqli_fetch_array($check_result, MYSQLI_NUM);
if($data[0] > 0){
	echo "Data already in orderlist.";
}
else{
	$insrt_table_order="INSERT INTO table_orderlist(serial_id, table_id, food_id, food_name, food_price, food_qty, order_subtotal, order_date, customer_phone, customer_ip) VALUES('', '$table_Id', '$food_id', '$food_name', '$food_price', '$food_qty', '$foodtotal_price', '$order_date', '$customer_phone', '$ip_add')";
	$run_table_order = mysqli_query($conn, $insrt_table_order);
	if ($run_table_order){
		echo "<script>alert('table orderlist data inserted');</script>";
	}
	else{
		echo "<script>alert('table orderlist data not inserted');</script>";
	}

	$view_customer = "SELECT * FROM customer_details WHERE customer_phone = '$customer_phone' AND  order_date = '$order_date'";
	$check_customer_details = mysqli_query($conn, $view_customer);
	if($check_customer_details->num_rows == 0) {
	$insert_cust_details = "INSERT INTO customer_details(customer_id, customer_name, customer_phone, customer_address, nearby_location, total_payment, ip_add, order_date) VALUES('', '$customer_name', '$customer_phone', '$customer_address', '$customer_locality', '', '$ip_add', '$order_date')";
		$run_cust_details = mysqli_query($conn, $insert_cust_details);
		if (!$run_cust_details){
			echo "<script> alert('Customer details not inserted.');</script>";	
		}
	} 
	else {
	    echo "<script>alert('Customer Details already inserted');</script>";
	}
}
}

	$drop_cart = "DELETE FROM `dinein_cart`";
	$run_drop_cart = mysqli_query($conn, $drop_cart);

	$edit_tableStatus = "UPDATE `restro_tables` SET `table_status`= '1' WHERE `table_id`='$table_Id'";
	mysqli_query($conn, $edit_tableStatus);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Encode Restro || Placing Order</title>
	<?php include'style.php'; ?>
</head>
<body>
<div id="main-wrapper">
<?php include'header.php'; ?>
<?php include'sidebar.php'; ?>
    <div class="content-body">
		<div class="container-fluid">
			<div class="row gx-0">
				<!-- <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card transparent-card mb-1">
                        <div class="card-header d-block">
                            <ul class="list-inline reorder_list">
		                        <li class="list-inline-item">
		                            <a class="bttn bttn-submit" href="table-order.php?tableid=<?php echo $table_Id?>&customer_phone=<?php echo $customer_phone?>">Food List</a>
		                        </li>        	
		                    </ul>    
                        </div>
					</div>	
				</div> -->
				<div class="col-xl-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="card transparent-card">
                            <div class="card-body checkout_div">
                                <div id="accordion-ten" class="accordion accordion-header-shadow accordion-rounded">
                                    <div class="accordion__item">
                                        <div class="accordion__header collapsed accordion__header--primary" data-toggle="collapse" data-target="#header-shadow_collapseOne">
                                            <span class="accordion__header--icon"></span>
                                            <span class="accordion__header--text">Customer Details</span>
                                            <span class="accordion__header-summary">
                                            	<ul class="list-inline">
                                            		<li>Customer : <b><?php echo $customer_name;?></b>,</li>
                                            		<li> <b>+91<?php echo $customer_phone;?></b></li>
                                            	</ul>
                                            	</span>
                                            <span class="accordion__header--indicator"></span>
                                        </div>
                                        <div id="header-shadow_collapseOne" class="collapse accordion__body" data-parent="#accordion-ten">
                                            <div class="accordion__body--text"> 
                                                <table class="checkout_details_table">
                                                	<tbody>
                                                		<tr>
                                                			<td><b>Customer Name :</b></td>
                                                			<td><?php echo $customer_name; ?></td>
                                                		</tr>
                                                		<tr>
                                                			<td><b>Customer Phone :</b></td>
                                                			<td>+91<?php echo $customer_phone; ?></td>
                                                		</tr>
                                                		<tr>
                                                			<td><b>Customer Address :</b></td>
                                                			<td><?php echo $customer_address; ?></td>
                                                		</tr>
                                                		<tr>
                                                			<td><b>Customer Locality :</b></td>
                                                			<td><?php echo $customer_locality; ?></td>
                                                		</tr>
                                                	</tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__item">
                                        <div class="accordion__header collapsed accordion__header--info" data-toggle="collapse" data-target="#header-shadow_collapseTwo">
                                            <span class="accordion__header--icon"></span>
                                            <span class="accordion__header--text">Order Summary</span>
                                            <span class="accordion__header--indicator"></span>
                                        </div>
                                        <div id="header-shadow_collapseTwo" class="collapse accordion__body show" data-parent="#accordion-ten">
                                            <div class="accordion__body--text">
                                                <table class="checkout_details_table">
                                                	<thead>
                                                		<tr>
                                                			<th>Item No.</th>
                                                			<th>Item Name</th>
                                                			<th>Item Price</th>
                                                			<th>Item Qty</th>
                                                			<th>Item Total</th>
                                                		</tr>
                                                	</thead>
                                               	<tbody>
<?php 
$table_Id = $_POST['table_Id'];
$view_table_order = "SELECT * FROM table_orderlist WHERE `customer_ip` = '$ip_add' AND `table_id` = '$table_Id' AND order_date = '$order_date'";
$run_query_table = mysqli_query($conn, $view_table_order);
if($run_query_table-> num_rows > 0){
while($row = mysqli_fetch_assoc($run_query_table)){
		
?>
                                                		<tr>
                                                			<td><?php echo $row['food_id'];?></td>
                                                			<td><?php echo $row['food_name'];?></td>
                                                			<td><?php echo $row['food_price'];?></td>
                                                			<td><?php echo $row['food_qty'];?></td>
                                                			<td><?php echo $row['order_subtotal'];?></td>
                                                		</tr>
<?php
}
}
?>
                                                	</tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col--xl-4 col-md-4 col-sm-12 col-xs-12">
                	<div class="total_payment_div">
<?php
// sum of all products ordered by customer.
$result = mysqli_query($conn, "SELECT sum(order_subtotal) AS value_sum FROM table_orderlist WHERE `table_id` = '$table_Id' AND order_date = '$order_date'"); 
$row = mysqli_fetch_assoc($result); 
$sum_amount = $row['value_sum'];
$_SESSION['sum_amount'] = $sum_amount;

// update total amount in customer_details table.
$edit_ordertotal = "UPDATE `customer_details` SET `total_payment`='$sum_amount' WHERE `customer_phone`='$customer_phone' AND `ip_add`='$ip_add'";
mysqli_query($conn, $edit_ordertotal);
?>
                		<h4>Payment Details</h4>
                		<table>
                			<tbody>
                				<tr>
                					<td>Price (4 items):</td>
                					<td><i class="fa fa-inr"></i> <?php echo $sum_amount; ?></td>
                				</tr>
                				<tr>
                					<td>Extra Charge:</td>
                					<td><i class="fa fa-inr"></i> 0</td>
                				</tr>
                				<tr>
                					<td>Discount:</td>
                					<td><i class="fa fa-inr"></i> 0</td>
                				</tr>
                				<tr>
                					<td>Total Payable Amount:</td>
                					<td><i class="fa fa-inr"></i> <?php echo $sum_amount; ?>/-</td>
                				</tr>
                			</tbody>
                		</table>
                		<a class="bttn bttn-success mt-3" href="rpay-api/pay.php">Make Payment</a>
                	</div>
                </div>

			</div>
		</div>
	</div>

<?php include'footer.php'; ?>
</body>
</html>
