<?php 
include'config.php';
include'get_session_access.php';
adminAccess($log_type);
$page_title = "Configuration";  

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
									<h4>Configuration</h4>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="configuration_div">
							<div class="clearfix"></div>
							<div class="row gx-2">
								<div class="col-lg-2 col-sm-3 col-xs-6">
									<div class="configuration_points">
										<img src="images/icons/current-order.png" class="img-fluid">
										<h5><a href="">Current Order</a></h5>
									</div>
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-6">
									<div class="configuration_points">
										<a href="orderlist.php">
										<img src="images/icons/online-order.png" class="img-fluid">
										<h5>All Orders</h5></a>
									</div>
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-6">
									<div class="configuration_points">
										<a href="kitchen_orderlist.php">
										<img src="images/icons/current-order.png" class="img-fluid">
										<h5>Kitchen Status</h5></a>
									</div>
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-6">
									<div class="configuration_points">
										<a href="config-customer.php">
										<img src="images/icons/customers.png" class="img-fluid">
										<h5>Customers</h5></a>
									</div>
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-6">
									<div class="configuration_points">
										<img src="images/icons/bell.png" class="img-fluid">
										<h5><a href="">Notifications</a></h5>
									</div>
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-6">
									<div class="configuration_points">
										<a href="config-tables.php">
										<img src="images/icons/table.png" class="img-fluid">
										<h5>Tables</h5></a>
									</div>
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-6">
									<div class="configuration_points">
										<img src="images/icons/manual-sync.png" class="img-fluid">
										<h5><a href="">Manual Sync</a></h5>
									</div>
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-6">
									<div class="configuration_points">
										<img src="images/icons/cashflow.png" class="img-fluid">
										<h5><a href="">Cashflow</a></h5>
									</div>
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-6">
									<div class="configuration_points">
										<img src="images/icons/bill.png" class="img-fluid">
										<h5><a href="">Expenses</a></h5>
									</div>
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-6">
									<div class="configuration_points">
										<img src="images/icons/day-end.png" class="img-fluid">
										<h5><a href="">Day End History</a></h5>
									</div>
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-6">
									<div class="configuration_points">
										<a href="">
										<img src="images/icons/help.png" class="img-fluid">
										<h5>Help !</h5></a>
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div class="col-xl-12 ">
						<div class="configuration_div">
							<h4>See the Configuration for your Restaurent</h4>
							<div class="clearfix"></div>
							<div class="row gx-2">
								<div class="col-lg-2 col-sm-3 col-xs-6">
									<div class="configuration_points">
										<a href="menulist.php">
										<img src="images/icons/menu.png" class="img-fluid">
										<h5>Menu</h5></a>
									</div>
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-6">
									<div class="configuration_points">
										<a href="staff-summary.php">
										<img src="images/icons/staff.png" class="img-fluid">
										<h5>Staffs</h5></a>
									</div>
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-6">
									<div class="configuration_points">
										<a href="current-kitchen-status.php">
										<img src="images/icons/bill.png" class="img-fluid">
										<h5>Bill / KOT Print</h5></a>
									</div>
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-6">
									<div class="configuration_points">
										<img src="images/icons/tax.png" class="img-fluid">
										<h5><a href="">Tax</a></h5>
									</div>
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-6">
									<div class="configuration_points">
										<img src="images/icons/discount.png" class="img-fluid">
										<h5><a href="">Discounts</a></h5>
									</div>
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-6">
									<div class="configuration_points">
										<img src="images/icons/billing-screen.png" class="img-fluid">
										<h5><a href="">Billing Screen</a></h5>
									</div>
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-6">
									<div class="configuration_points">
										<img src="images/icons/setting.png" class="img-fluid">
										<h5><a href="">Settings</a></h5>
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