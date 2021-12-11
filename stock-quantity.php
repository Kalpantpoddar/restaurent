<?php
include'config.php';
include'get_session_access.php';
$show_items = "select * from purchase_items";
$run_query = mysqli_query($conn, $show_items);
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
							<ul class="list-inline">
								<li>
									<h4>Stock Quantity</h4>
								</li>
								<li>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-12">
								<div class="table-responsive">
									<table id="example5" class="display dataTable mb-4 ">
										<thead>
                                            <tr>
                                                <th><strong class="font-w600">Item Id</strong></th>
                                                <th><strong class="font-w600">Item Name</strong></th>
                                                <th><strong class="font-w600 wspace-no">Category</strong></th>
                                                <th><strong class="font-w600">Current Stock</strong></th>
                                                <th><strong class="font-w600">Stock Limit</strong></th>
                                                <th><strong class="font-w600">Status</strong></th>
                                                <th><strong class="font-w600">Action</strong></th>

                                            </tr>
                                        </thead>
										<tbody>
											<?php
                                            if($run_query-> num_rows > 0){

                                             while($row = mysqli_fetch_assoc($run_query)) { 
                                                $item_id = $row['item_id'];
                                                $item_name = $row['item_name'];
                                                $item_rate = $row['item_rate'];
                                                $item_qty = floatval($row['item_qty']);
                                                $purchase_stock = floatval($row['purchase_stock']);
                                                $status = "";
												if ($item_qty == 0){
													$status = "empty";
												}
												else if($item_qty <= $purchase_stock * 0.25){
													$status = "Critical";
												}
												else if($item_qty <= $purchase_stock * 0.5){
													$status = "Nearing";
												}
												else if($item_qty >= $purchase_stock * 0.5){
													$status = "Surplus";
												}
												else{
													$status = "Not Measuring";
												}

												

											echo "<tr>
												<td>".$item_id.".</td>
												<td class='wspace-no'>".$item_name."</td>
												<td></td>
												<td>".$item_qty."</td>
												<td>".$purchase_stock."</td>
												<td>".$status."</td>
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
															<a class='dropdown-item text-info' href='edit-purchasestock.php?id=$item_id'>
															<svg class='mr-3' width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
																<path d='M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18457 2.99721 7.13633 4.39828 5.49707C5.79935 3.85782 7.69279 2.71538 9.79619 2.24015C11.8996 1.76491 14.1003 1.98234 16.07 2.86' stroke='#2F4CDD' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
																<path d='M22 4L12 14.01L9 11.01' stroke='#2F4CDD' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
															</svg>
															Edit Item
															</a>
															<a class='dropdown-item text-black' href='delete-purchaseItem.php?id=$item_id'>
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
                                                echo "<span style='color:#fe0002;font-size:15px;'>Banner list is Empty.</span>";
                                            }

                                             ?>

										</tbody>
									</table>
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

<?php
// $status;
// if ($item_qty >= $purchase_stock * .75) {
// 	$status = "Surplus";
// }
// else if($item_qty < $purchase_stock * .75 || $item_qty >= $purchase_stock * .5){
// 	$status = "Good";
// }
// else if($item_qty >= $purchase_stock * .25){
// 	$status = "Nearing";
// }
// else if($item_qty < $purchase_stock * .25){
// 	$status = "Critical";
// }
// else if($item_qty == 0){
// 	$status = "Empty";
// }
// else{
// 	$status = "Not Measuring";
// }





?>