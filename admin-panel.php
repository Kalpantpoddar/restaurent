<?php
include'config.php';

include'get_session_access.php';
include'function.php';
admin_managerAccess($log_type);
$page_title = "Admin-Panel";

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
					<div class="col-xl-2 col-lg-2 col-sm-6 pr-1 pl-2">
						<div class="card overflow-hidden">
							<div class="card-header media media1 border-0">
								<div class="media-body">
									<h2 class="text-black">
									<?php
									$show_items = mysqli_query($conn, "SELECT food_id FROM food_item ORDER BY food_id");
									$itemdata=mysqli_num_rows($show_items);
									echo $itemdata; ?></h2>
									<p class="mb-0 text-black">Food Products</p>
								</div>
								<div class="media_img media_img1">
									<img src="images/icons/main-food.png" title="food-products" alt="home-img">
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-sm-6 px-1">
						<div class="card overflow-hidden">
							<div class="card-header media media2 border-0">
								<div class="media-body">
									<h2 class="text-black">
									<?php
									echo totalDineOrder();
									
									?>
									</h2>
									<p class="mb-0 text-black">Today's Order</p>
								</div>
								<div class="media_img media_img2">
									<img src="images/icons/current-order.png" title="orders" alt="home-img">
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-sm-6 px-1">
						<div class="card overflow-hidden">
							<div class="card-header media media3 border-0">
								<div class="media-body">
									<h2 class="text-black">
									<?php
									$delivery_orderlist = mysqli_query($conn, "SELECT * FROM delivery_order ORDER BY order_id");
									$deliverydata=mysqli_num_rows($delivery_orderlist);
									echo $deliverydata;
									?>	
									</h2>
									<p class="mb-0 text-black">Today's Delivery</p>
								</div>
								<div class="media_img  media_img3">
									<img src="images/icons/delivery.png" title="delivery" alt="home-img">
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-sm-6 px-1">
						<div class="card overflow-hidden">
							<div class="card-header media media4 border-0">
								<div class="media-body">
									<h2 class="text-black">
									<?php
									$cust_list = mysqli_query($conn, "SELECT * FROM customer_details ORDER BY customer_id");
									$cust_data=mysqli_num_rows($cust_list);
									echo $cust_data;
									?>	
									</h2>
									<p class="mb-0 text-black">Total Customer</p>
								</div>
								<div class="media_img  media_img4">
									<img src="images/icons/customers.png" title="customers" alt="home-img">
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-sm-6 px-1">
						<div class="card overflow-hidden">
							<div class="card-header media media5 border-0">
								<div class="media-body">
									<h2 class="text-black">
									<?php
									$staff_list = mysqli_query($conn, "SELECT * FROM restro_staff ORDER BY staff_id");
									$staff_data=mysqli_num_rows($staff_list);
									echo $staff_data;
									?></h2>
									<p class="mb-0 text-black">Available Staffs</p>
								</div>
								<div class="media_img media_img5">
									<img src="images/icons/waiter.png" title="waiter" alt="home-img">
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-sm-6 px-1">
						<div class="card overflow-hidden">
							<div class="card-header media media6 border-0">
								<div class="media-body">
									<h2 class="text-black">
									<?php
									$ktn_display = mysqli_query($conn, "SELECT kot_id FROM kitchen_orderlist ORDER BY kot_id");
									$ktndata=mysqli_num_rows($ktn_display);
									echo $ktndata;
									?>
									</h2>
									<p class="mb-0 text-black">Kitchen Orderlist</p>
								</div>
								<div class="media_img media_img6">
									<img src="images/icons/chef.png" title="chef" alt="home-img">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid order_list">
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-lg-12 col-sm-12">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div class="absolute_header">
									<h4 class="card-title mb-2">Table Order Requests</h4>
								</div>
							</div>
							<div class="card-body p-0">
								<div class="table-responsive px-3">
									<table id="example5" class="display mb-3 dataTablesCard table order-request">
										<thead>
											<tr>
												<th>order_id</th>
												<th>customer phone</th>
												<th>order type</th>
												<th>order date</th>
												<th>total payment</th>
												<th>payment status</th>
												<th>customer Ip</th>
											</tr>
										</thead>
										<tbody>
									<?php
											$show_items = "SELECT * FROM dinein_order";
											$run_query = mysqli_query($conn, $show_items);
                                            if($run_query-> num_rows > 0){

                                             while($row = mysqli_fetch_assoc($run_query)) { 
                                             	$order_id = $row['order_id'];
                                                $customer_phone = $row['customer_phone'];
                                                $total_payment = $row['total_payment'];
                                                $payment_status = $row['payment_status'];
                                                $order_date = $row['order_date'];
                                                $order_type = "dine_in";
                                                $customer_ip = $row['customer_ip'];
											echo "<tr>
												<td>".$order_id.".</td>
												<td class='wspace-no'>".$customer_phone."</td>
												<td>".$order_date."</td>
												<td>".$order_type."</td>
												<td><i class='fa fa-inr'></i> ".$total_payment."/-</td>
												<td>".$payment_status."</td>
												<td>".$customer_ip."</td>
												
											</tr>";
                                            } 
                                            }
                                            else{
                                                echo "<span style='color:#fe0002;font-size:15px;'>DIne In list is Empty.</span>";
                                            }

                                             ?>												
									</tbody></table>
									<div class="card-footer border-0 pt-0 text-center">
										<a href="order-summary.php" class="btn-link">View More &gt;&gt;</a>
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