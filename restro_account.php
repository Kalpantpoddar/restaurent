<?php
include'config.php';
include'get_session_access.php';
admin_managerAccess($log_type);
$page_title = "Restro Accounting";
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
							<h4>Payment Transaction List</h4>
						</div>
						<div class="">
								<div class="table-responsive">
									<table class="display dataTable example4 mb-4">
										<thead>
                                            <tr>
                                                <th><strong class="font-w600">Payment_ID</strong></th>
                                                <th><strong class="font-w600">Order_id</strong></th>
                                                <th><strong class="font-w600">Customer_phone</strong></th>
                                                <th><strong class="font-w600">Customer_name</strong></th>
                                                <th><strong class="font-w600">Order_cost</strong></th>
                                                <th><strong class="font-w600 wspace-no">Payment_status</strong></th>
                                                <th><strong class="font-w600">Order_date</strong></th>

                                            </tr>
                                        </thead>
										<tbody>
											<?php
											$show_items = "select * from pay_orders";
											$run_query = mysqli_query($conn, $show_items);
                                            if($run_query-> num_rows > 0){

                                             while($row = mysqli_fetch_assoc($run_query)) { 
                                                $p_id = $row['p_id'];
                                                $order_id = $row['order_id'];
                                                $status = $row['status'];
                                                $phone = $row['phone'];
                                                $name = $row['name'];
                                                $price = $row['price'];
                                                $order_date = $row['order_date'];

											echo "<tr>
												<td>".$p_id.".</td>
												<td>".$order_id."/-</td>
												<td>".$phone."</td>
												<td>".$name."</td>
												<td>".$price."</td>
												<td>".$status."</td>
												<td>".$order_date."</td>
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
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

    <?php include'footer.php'; ?>
	
</body>
</html>