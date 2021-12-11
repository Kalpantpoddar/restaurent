<?php include'config.php'; 
include'get_session_access.php';
$page_title = "Purchase Report";  
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
					<div class="col-xl-12">
						<div class="inventory_div">
							<ul class="nav nav-tabs mb-3">
							    <li class="active"><a data-toggle="tab" href="#purchasingProducts">Purchashed Products</a></li>
							    <li><a data-toggle="tab" href="#purchasingdealer">Purchase Dealers</a></li>
							    <li><a data-toggle="tab" href="#add-purchased-items">Add Purchased Products</a></li>

						  	</ul>

						  	<div class="tab-content">
							    <div id="purchasingProducts" class="tab-pane fade in active show">
							      	<div class="table-responsive">
										<table id="example5" class="display mb-4 dataTablesCard">
											<thead>
	                                            <tr>
	                                                <th><strong class="font-w600">ID</strong></th>
	                                                <th><strong class="font-w600">Dealer Name</strong></th>
	                                                <th><strong class="font-w600">Item Name</strong></th>
	                                                <th><strong class="font-w600">Price</strong></th>
	                                                <th><strong class="font-w600">Qty</strong></th>

	                                                <th><strong class="font-w600">Date of Purchase</strong></th>
	                                                <th><strong class="font-w600">Action</strong></th>

	                                            </tr>
	                                        </thead>
											<tbody>
											<?php
											$show_items = "select * from purchase_items";
											$run_query = mysqli_query($conn, $show_items);
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

                                                $dealer_id = $row['dealer_id'];
                                                $dealer_name = "";
                                                $view_dealer = "SELECT dealer_name FROM purchase_dealer where dealer_id = '$dealer_id'";
                                                $run_dealer_data = mysqli_query($conn, $view_dealer);
												if($run_dealer_data-> num_rows > 0){	
                                             	while($row = mysqli_fetch_assoc($run_dealer_data)){
	                                             	$dealer_name = $row['dealer_name'];
	                                            }
	                                        }

											echo "<tr>
												<td>".$item_id.".</td>
												<td>".$dealer_name."</td>
												<td class='wspace-no'>".$item_name."</td>
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

							    <div id="purchasingdealer" class="tab-pane fade">
							      	<div class="table-responsive">
										<table id="" class="display example4 dataTable mb-4">
											<thead>
	                                            <tr>
	                                                <th><strong class="font-w600">ID</strong></th>
	                                                <th><strong class="font-w600">Dealer Name</strong></th>
	                                                <th><strong class="font-w600">Dealer Phone</strong></th>
	                                                <th><strong class="font-w600">Dealer Eail</strong></th>

	                                                <th><strong class="font-w600">Store Name</strong></th>
	                                                <th><strong class="font-w600">Store Phone</strong></th>
	                                                <th><strong class="font-w600">Store Address</strong></th>
	                                                <th><strong class="font-w600">Purchase Date</strong></th>

	                                                <th><strong class="font-w600">Total Price</strong></th>
	                                                <th><strong class="font-w600">Paid Price</strong></th>
	                                                <th><strong class="font-w600">Due Price</strong></th>

	                                                <th><strong class="font-w600">Action</strong></th>

	                                            </tr>
	                                        </thead>
											<tbody>
											<?php
											$show_items = "select * from purchase_dealer";
											$run_query = mysqli_query($conn, $show_items);
                                            if($run_query-> num_rows > 0){	

                                             while($row = mysqli_fetch_assoc($run_query)) { 
                                                $row['dealer_id'];
                                                $row['dealer_name'];
                                                $row['dealer_phone'];
                                                $row['dealer_email'];

                                                $row['store_name'];
                                                $row['store_phone'];
                                                $row['store_address'];

                                                $row['purchase_date'];
                                                $row['total_price'];
                                                $row['paid_price'];
                                                $row['due_price'];

											echo "<tr>
												<td>".$row['dealer_id'].".</td>
												<td class='wspace-no'>".$row['dealer_name']."</td>
												<td>".$row['dealer_phone']."</td>
												<td>".$row['dealer_email']."</td>
												<td>".$row['store_name']."</td>
												<td>".$row['store_phone']."</td>
												<td>".$row['store_address']."</td>

												<td>".$row['purchase_date']."</td>
												<td>".$row['total_price']."</td>
												<td>".$row['paid_price']."</td>
												<td>".$row['due_price']."</td>
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
															<a class='dropdown-item text-info' href='edit-purchasedealer.php?id=$dealer_id'>
															<svg class='mr-3' width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
																<path d='M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18457 2.99721 7.13633 4.39828 5.49707C5.79935 3.85782 7.69279 2.71538 9.79619 2.24015C11.8996 1.76491 14.1003 1.98234 16.07 2.86' stroke='#2F4CDD' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
																<path d='M22 4L12 14.01L9 11.01' stroke='#2F4CDD' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
															</svg>
															Edit Details
															<a class='dropdown-item text-black' href='delete-purchasedealer.php?id=$dealer_id'>
															<svg class='mr-3' width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
																<path d='M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z' stroke='#F24242' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'></path>
																<path d='M15 9L9 15' stroke='#F24242' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'></path>
																<path d='M9 9L15 15' stroke='#F24242' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'></path>
															</svg>
															Delete Details
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

							    <div id="add-purchased-items" class="tab-pane fade">
							      	<div class="recipe_div">
							      	<h4>Add Purchaed Items In inventory</h4>	
									    <form action="" method="POST" name="cart">
							      			<div class="clearfix"></div>
								      		<div class="row">
								      			<div class="col-lg-12 col-sm-12 col-lg-offset-2">
								      				<div class="add_purchasedItems">
								      				<table class="Store_details">
								      					<tr>
								      						<td><label>Date:</label></td>
								      						<td>
						                                        <input class="form-control" name="purchase_date" type="datetime-local" placeholder="Purchasing Date">
								      						</td>
								      					</tr>
								      					<tr>
								      						<td><label>Store Name:</label></td>
								      						<td>
						                                        <input class="form-control" name="store_name" type="text" placeholder="Store Name" required>
								      						</td>
								      						<td><label>Store Contact No.:</label></td>
								      						<td>
						                                        <input class="form-control" name="store_phone" type="tel" placeholder="Store Contact No." required>
								      						</td>
								      						<td><label>Store Address:</label></td>
								      						<td>
						                                        <input class="form-control" name="store_address" type="text" placeholder="Store Address">
								      						</td>
								      					</tr>
								      					<tr>
								      						<td><label>Dealer Name:</label></td>
								      						<td>
						                                        <input class="form-control" name="dealer_name" type="text" placeholder="Dealer Name" required>
								      						</td>
								      						<td><label>Dealer Contact no.:</label></td>
								      						<td>
						                                        <input class="form-control" name="dealer_phone" type="text" placeholder="Dealer Contact no." required>
								      						</td>
								      						<td><label>Dealer Email:</label></td>
								      						<td>
						                                        <input class="form-control" name="dealer_email" type="email" placeholder="Dealer Email" required>
								      						</td>
								      					</tr>
								      				</table>

								      				<table class="purchased_itemList" id="dynamicItem_field">
								      					<tr>
								      						<th>Item Id.</th>
								      						<th>Item Name</th>
								      						<th>Rate</th>
								      						<th>Qty</th>
								      						<th>Item Total Price</th>
								      						<th>Action</th>
								      					</tr>
								      					<tr name="line_items">
								      						<td>01.</td>
								      						<td>
								      						<div class="form-group">
						                                        <input class="form-control item_name" name="item_name[]" type="text" placeholder="Item Name">
						                                    </div>
								      						</td>
								      						<td>
								      						<div class="form-group">
						                                        <input class="form-control itemrate" name="item_rate[]" type="text" placeholder="Item Rate">
						                                    </div>
								      						</td>
								      						<td>
								      						<div class="form-group">
						                                        <input class="form-control itemqty" name="item_qty[]" type="text" placeholder="Item Qty">
						                                    </div>
								      						</td>
								      						<td>
								      						<div class="form-group">
						                                        <input class="form-control itemtotal" name="item_total[]" type="text" placeholder="Item Total Price">
						                                    </div>
								      						</td>
								      						<td>
								      							<button type="button" id="addItem" name="add_item" class="btn btn-success">+</button>
								      						</td>
								      					</tr>
								      				</table>
								      				<table class="purchased_itemList">
								      					<tr>
								      						<td>Sub Total:</td>
								      						<td><input class="form-control subtotal" name="sub_total" type="text"></td>
								      					</tr>
								      					<tr>
								      						<td>GST(Tax):</td>
								      						<td><input class="form-control gst" name="gst" type="text" placeholder="GST(Tax)"></td>
								      					</tr>
								      					<tr>
								      						<td>Total Price:</td>
								      						<td><input class="form-control total_price" name="total_price" type="text" placeholder="Total Price"></td>
								      					</tr>
								      					<tr>
								      						<td>Paid Price:</td>
								      						<td><input class="form-control" name="paid_price" type="text" placeholder="Paid Price"></td>
								      					</tr>
								      					<tr>
								      						<td>Due Price:</td>
								      						<td><input class="form-control" name="due_price" type="text" placeholder="Due Price"></td>
								      					</tr>
								      				</table>
								      				<div class="form-group float-right">
				                                        <input class="bttn bttn-submit" type="submit" name="purchase_submit">
				                                    </div>
								      				</div>
			                                        
			                                    </div>
								      		</div>
				                        </form>
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
	<script type="text/javascript">
$(document).ready(function(){
	var i = 1;
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id");
		$('#row'+button_id+'').remove();
		i--;
	});
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" id="ingradient_name" name="ingradient_name[]" class="form-control" placeholder="Ingradient Name"></td><td><input type="text" id="ingradient_qty" name="ingradient_qty[]" class="form-control" placeholder="Ingradient Quantity"></td><td><button id="'+i+'" name="remove_ingradient" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
	});
	
});

	</script>
</body>
</html>

<?php

if (isset($_POST['purchase_submit'])) {
	$dealer_name = $_POST['dealer_name'];
	$dealer_phone = $_POST['dealer_phone'];
	$dealer_email = $_POST['dealer_email'];
	$store_name = $_POST['store_name'];
	$store_phone = $_POST['store_phone'];
	$store_address = $_POST['store_address'];
	$purchase_date = $_POST['purchase_date'];

	$total_price = $_POST['total_price'];
	$paid_price = $_POST['paid_price'];
	$due_price = $_POST['due_price'];

	$item_name = $_POST['item_name'];
	$item_rate = $_POST['item_rate'];
	$item_qty = $_POST['item_qty'];
	$item_total = $_POST['item_total'];

	$insert_data = "INSERT INTO `purchase_dealer`(`dealer_id`, `dealer_name`, `dealer_phone`, `dealer_email`, `store_name`, `store_phone`, `store_address`, `purchase_date`, `total_price`, `paid_price`, `due_price`) VALUES ('','$dealer_name','$dealer_phone','$dealer_email','$store_name','$store_phone','$store_address','$purchase_date','$total_price','$paid_price','$due_price')";
	
	$run_query = mysqli_query($conn, $insert_data);
	if ($run_query) {
		echo '<script>alert("Data inserted.")</script>';
	}
	else{
		echo '<script>alert("Oops! Data not inserted.")</script>';
	}

	$get_data = "SELECT `dealer_id` FROM `purchase_dealer` WHERE `dealer_name` = '$dealer_name' AND `dealer_phone` = '$dealer_phone' AND `purchase_date` = '$purchase_date'";
	$run_data = mysqli_query($conn, $get_data);
	
	while($row = mysqli_fetch_array($run_data)) {
      $dealer_id = $row['dealer_id'];
      echo $dealer_id;

      	foreach ($item_name as $key => $value) {
	      	$i_name = $value;
	      	$i_rate = $item_rate[$key];
	      	$i_qty = $item_qty[$key];
	      	$i_total = $item_total[$key];

	      	$insert_items = "INSERT INTO `purchase_items`(`item_id`, `item_name`, `item_rate`, `item_qty`, `item_total`, `dealer_id`, `purchase_date`) VALUES ('','$i_name','$i_rate','$i_qty','$i_total','$dealer_id', '$purchase_date')";

	    	$run_itemData = mysqli_query($conn, $insert_items);
			    
      	}
      	if ($run_query) {
			echo '<script>alert("Items inserted.")</script>';
		}
		else{
			echo '<script>alert("Oops! Items not inserted.")</script>';
		}

   	}
}

?>