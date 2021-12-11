<?php
include'config.php';
include'get_session_access.php';
$page_title = "All Orders"; 

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
					<div class="col-lg-12 col-sm-12">
						<div class="page_title">
							<ul class="nav nav-tabs">
							    <li><a data-toggle="tab" href="#dinein_order">Dine_In Orders</a></li>
							    <li><a data-toggle="tab" href="#delivery_order">Delivery Orders</a></li>
							    <li><a data-toggle="tab" href="#pickup_order">Pick_up Orders</a></li>
						  	</ul>
						</div>
						<div class="tab-content">
							<div id="dinein_order" class="tab-pane fade in active show">
								<div class="table-responsive">
									<table id="example5" class="display mb-4 dataTablesCard">
										<thead>
                                            <tr>
                                                <th><strong class="font-w600">ID</strong></th>
                                                <th><strong class="font-w600">Cust. Phone</strong></th>
                                                <th><strong class="font-w600 wspace-no">Total Amount</strong></th>
                                                <th><strong class="font-w600">Payment Status</strong></th>
                                                <th><strong class="font-w600">Order Date</strong></th>
                                                <th><strong class="font-w600">Action</strong></th>

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
												<td>".$total_payment."</td>
												<td><i class='fa fa-inr'></i> ".$payment_status."/-</td>
												<td>".$order_date."</td>
												<td>
					                                <div class=''>
					                                                        
					                                        <a class=' text-dark' href='view_customer_order.php?cust_phone=$customer_phone&order_date=$order_date'>
					                                        <svg class='mr-1' xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='#555' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z'></path><circle cx='12' cy='12' r='3'></circle></svg>
					                                                            View
					                                        </a>
					                                </div>
					                            </td>
											</tr>";
                                            } 
                                            }
                                            else{
                                                echo "<span style='color:#fe0002;font-size:15px;'>DIne In list is Empty.</span>";
                                            }

                                             ?>

										</tbody>
									</table>
								</div>
							</div>
							<div id="delivery_order" class="tab-pane fade">
								<div class="table-responsive">
									<table id="example4" class="display mb-4 dataTablesCard">
										<thead>
                                            <tr>
                                                <th><strong class="font-w500">ID</strong></th>
                                                <th><strong class="font-w500">Customer Phone</strong></th>
                                                <th><strong class="font-w500 wspace-no">Total Amount</strong></th>
                                                <th><strong class="font-w500">Payment Status</strong></th>
                                                <th><strong class="font-w500">Order Date</strong></th>
                                                <th><strong class="font-w500">Action</strong></th>

                                            </tr>
                                        </thead>
										<tbody>
											<?php
											$show_deliverylist = "SELECT * FROM delivery_order WHERE order_type = 'delivery'";
											$run_deliverylist = mysqli_query($conn, $show_deliverylist);
                                            if($run_deliverylist-> num_rows > 0){

                                             while($raw = mysqli_fetch_assoc($run_query)) { 
                                             	$d_order_id = $raw['order_id'];
                                                $d_customer_phone = $raw['customer_phone'];
                                                $d_total_payment = $raw['total_payment'];
                                                $d_payment_status = $raw['payment_status'];
                                                $d_order_date = $raw['order_date'];
                                                $d_order_type = $raw['order_type'];
                                                $d_customer_ip = $raw['customer_ip'];
											echo "<tr>
												<td>".$d_order_id.".</td>
												<td class='wspace-no'>".$d_customer_phone."</td>
												<td>".$d_total_payment."</td>
												<td><i class='fa fa-inr'></i> ".$d_payment_status."/-</td>
												<td>".$d_order_date."</td>
												<td>
													<div class='dropdown ml-auto'>
														<div class='btn-link' data-toggle='dropdown'>
															<svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
																<path d='M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z' stroke='#3E4954' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
																<path d='M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z' stroke='#3E4954' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
																<path d='M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z' stroke='#3E4954' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
															</svg>
														</div>
														<div class='dropdown-menu dropdown-menu-right'>
															<a class='dropdown-item text-info' href='edit-fooditem.php?id=$food_id'>
															<svg class='mr-3' width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
																<path d='M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18457 2.99721 7.13633 4.39828 5.49707C5.79935 3.85782 7.69279 2.71538 9.79619 2.24015C11.8996 1.76491 14.1003 1.98234 16.07 2.86' stroke='#2F4CDD' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
																<path d='M22 4L12 14.01L9 11.01' stroke='#2F4CDD' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
															</svg>
															View Details
															</a>
															<a class='dropdown-item text-black' href='delete-fooditem.php?id=$food_id'>
															<svg class='mr-3' width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
																<path d='M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z' stroke='#F24242' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'></path>
																<path d='M15 9L9 15' stroke='#F24242' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'></path>
																<path d='M9 9L15 15' stroke='#F24242' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'></path>
															</svg>
															Delete Item
															</a>
														</div>
													</div>
												</td>
											</tr>";
                                            } 
                                            }
                                            else{
                                                echo "<span style='color:#fe0002;font-size:15px;'>Delivery Order list is Empty.</span>";
                                            }

                                             ?>

										</tbody>
									</table>
								</div>
							</div>
							<div id="pickup_order" class="tab-pane fade in">
								<div class="table-responsive">
									<table id="example4" class="display mb-4 dataTablesCard">
										<thead>
                                            <tr>
                                                <th><strong class="font-w600">ID</strong></th>
                                                <th><strong class="font-w600">Name</strong></th>
                                                <th><strong class="font-w600 wspace-no">Category</strong></th>
                                                <th><strong class="font-w600">Price</strong></th>
                                                <th><strong class="font-w600">Unit</strong></th> 
                                                <th><strong class="font-w600">Action</strong></th>

                                            </tr>
                                        </thead>
										<tbody>
											<?php
											$show_items = "SELECT * FROM delivery_order WHERE order_type = 'pick_up'";
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
												<td>".$total_payment."</td>
												<td><i class='fa fa-inr'></i> ".$payment_status."/-</td>
												<td>".$order_date."</td>
												<td>50 Sell</td>
												<td>".$food_img."</td>
												<td>
													<div class='dropdown ml-auto'>
														<div class='btn-link' data-toggle='dropdown'>
															<svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
																<path d='M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z' stroke='#3E4954' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
																<path d='M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z' stroke='#3E4954' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
																<path d='M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z' stroke='#3E4954' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
															</svg>
														</div>
														<div class='dropdown-menu dropdown-menu-right'>
															<a class='dropdown-item text-info' href='edit-fooditem.php?id=$food_id'>
															<svg class='mr-3' width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
																<path d='M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18457 2.99721 7.13633 4.39828 5.49707C5.79935 3.85782 7.69279 2.71538 9.79619 2.24015C11.8996 1.76491 14.1003 1.98234 16.07 2.86' stroke='#2F4CDD' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
																<path d='M22 4L12 14.01L9 11.01' stroke='#2F4CDD' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
															</svg>
															Edit Item
															</a>
															<a class='dropdown-item text-black' href='delete-fooditem.php?id=$food_id'>
															<svg class='mr-3' width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
																<path d='M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z' stroke='#F24242' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'></path>
																<path d='M15 9L9 15' stroke='#F24242' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'></path>
																<path d='M9 9L15 15' stroke='#F24242' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'></path>
															</svg>
															Delete Item
															</a>
														</div>
													</div>
												</td>
											</tr>";
                                            } 
                                            }
                                            else{
                                                echo "<span style='color:#fe0002;font-size:15px;'>Pick Up Order list is Empty.</span>";
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
        <!--**********************************
            Content body end
        ***********************************-->

    <?php include'footer.php'; ?>
	
</body>
</html>