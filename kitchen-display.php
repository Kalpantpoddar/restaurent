<?php 
include'config.php';
include'get_session_access.php';
include'function.php';
$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
$order_date = $date->format('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Encode Restaurent - Admin Dashboard </title>
    <?php include'style.php'; ?>
</head>
<body>
    <div id="main-wrapper">
    <?php include'header.php'; ?>
    <?php include'sidebar.php'; ?>
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-xl-12 col-lg-12 col-sm-6 col-xs-12">
						<div class="kitchen_orders">
						  	<div class="tab-content">
							    <div id="dineIn" class="">
							    	<h4 class="kitchen_orderTitle">Dining Block</h4>
								<div class="row">
<?php
$cust_phone = "";
$show_orderlist = "SELECT * FROM kitchen_orderlist WHERE order_type = 'dine_in'";
$run_orderlist = mysqli_query($conn, $show_orderlist);
if($run_orderlist-> num_rows > 0){
while($rec = mysqli_fetch_array($run_orderlist)){


// print_r($rec);
$cust_phone = $rec['cust_phone'];
$order_date = $rec['order_date'];
$kot_status = $rec['kot_status'];

?>
										
											<!-- <h3><?php echo ucfirst($row['order_type']); ?></h3> -->
										<div class="col-lg-3 col-sm-6 col-xs-12">
											<div class="pending_div">
<?php
$sql_details = mysqli_query($conn, "SELECT * FROM table_orderlist WHERE order_date = '$order_date' AND customer_phone = '$cust_phone'");
$res = mysqli_fetch_array($sql_details);
?>
												<div class="pending_divTitle">
													<ul class="list-inline">
														<li><h4>Table <?php echo $res['table_id'];?></h4></li>
														<li class="float-right fs-12"><p><i class="fa fa-clock-o"></i> <?php echo $rec['order_date'];?></p></li><br>
														<li class="text-white"><i class="fa fa-phone"></i> <?php echo $cust_phone;?></li>
														<li class="text-white float-right"> <?php echo $rec['order_type'];?></li>
													</ul>
												</div>
												<div class="pending_divDetails">
													<ul class="list-inline">
														<li>Bill No.:01</li>
														<li class="float-right">KOT No.:<?php echo $rec['kot_id']; ?></li>
													</ul>
													<table>
														<tr>
															<th>Items</th>
															<th>Qty</th>
														</tr>
<?php
$show_foodlist = "SELECT * FROM table_orderlist WHERE customer_phone = '$cust_phone'";
$run_foodlist = mysqli_query($conn, $show_foodlist) or die($conn);
if($run_foodlist-> num_rows > 0){
while($row = mysqli_fetch_assoc($run_foodlist)){
	// print_r($row);
?>
														<tr>
															<td><?php echo $row['food_name'];?></td>
															<td><?php echo $row['food_qty'];?></td>
														</tr>
<?php
}
}
?>
													</table>
												</div>
												<div class="text-center">
													<input type="hidden" name="" class="kot_phone" 
													value="<?php echo $cust_phone; ?>">
												<?php 
												if ($kot_status == '0'){
													echo '<a href="kitchen_status_update.php?cust_phone='.$cust_phone.'&kot_status=1" class="bttn btn-info food-status">Pending</a>';
												}
												else{
													echo '<a class="bttn btn-success food-status">
												'.$kot_status.'  Ready</a>';
												}
												?>
												</div>
											</div>

										</div>
<?php
}
}

?>
										
									</div>
								</div>
						  	</div>	
						</div>
					</div>

					<div class="col-xl-12 col-lg-12 col-sm-6 col-xs-12">
						<div class="kitchen_orders">
						  	<div class="tab-content">
							    <div id="Delivery" class="mt-1">
							    	<h4 class="kitchen_orderTitle">Pickup / Delivery Block</h4>
								<div class="row">

<?php
$dcust_phone = "";
$show_dorderlist = "SELECT * FROM kitchen_orderlist WHERE order_type = 'pickup'";
$run_dorderlist = mysqli_query($conn, $show_dorderlist);
if($run_dorderlist-> num_rows > 0){
while($drec = mysqli_fetch_array($run_dorderlist)){

$dcust_phone = $drec['cust_phone'];
$dorder_date = $drec['order_date'];
$dkot_status = $drec['kot_status'];

?>
										
											<!-- <h3><?php echo ucfirst($row['order_type']); ?></h3> -->
										<div class="col-lg-3 col-sm-6 col-xs-12">
											<div class="pending_div">
<?php
$d_details = mysqli_query($conn, "SELECT * FROM delivery_orderlist WHERE order_date = '$dorder_date' AND customer_phone = '$dcust_phone'");
$dres = mysqli_fetch_array($d_details);
?>
												<div class="pending_divTitle">
													<ul class="list-inline">
														<li><h4> </h4></li>
														<li class="float-right fs-12"><p><i class="fa fa-clock-o"></i> <?php echo $drec['order_date'];?></p></li><br>
														<li class="text-white"><i class="fa fa-phone"></i> <?php echo $dcust_phone;?></li>
														<li class="text-white float-right"> <?php echo $drec['order_type'];?></li>
													</ul>
												</div>
												<div class="pending_divDetails">
													<ul class="list-inline">
														<li>Bill No.:01</li>
														<li class="float-right">KOT No.:<?php echo $drec['kot_id']; ?></li>
													</ul>
													<table>
														<tr>
															<th>Items</th>
															<th>Qty</th>
														</tr>
<?php
$show_dfoodlist = "SELECT * FROM delivery_orderlist WHERE customer_phone = '$dcust_phone'";
$run_dfoodlist = mysqli_query($conn, $show_dfoodlist) or die($conn);
if($run_dfoodlist-> num_rows > 0){
while($drow = mysqli_fetch_assoc($run_dfoodlist)){
	// print_r($row);
?>
														<tr>
															<td><?php echo $drow['food_name'];?></td>
															<td><?php echo $drow['food_qty'];?></td>
														</tr>
<?php
}
}
?>
													</table>
												</div>
												<div class="text-center">
													<input type="hidden" name="" class="kot_phone" 
													value="<?php echo $cust_phone; ?>">
												<?php 
												if ($dkot_status == '0'){
													echo '<a href="kitchen_status_update.php?cust_phone='.$cust_phone.'&kot_status=1" class="bttn btn-info food-status">Pending</a>';
												}
												else{
													echo '<a class="bttn btn-success food-status">Ready</a>';
												}
												?>
												</div>
											</div>

										</div>
<?php
}
}

?>
										
									</div>
								</div>
						  	</div>	
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

<?php include'footer.php'; ?>
	
</body>
</html>