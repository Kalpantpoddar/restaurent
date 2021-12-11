<?php
include'config.php';
include'get_session_access.php';

$page_title = "New Order";

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
		
    <div class="content-body">
    	<div class="new-orderSec">
    		<div class="container">
		    	<div class="row">
		    		<div class="col-lg-6 col-sm-6 col-xs-12 col-offset-2 col-sm-offset-2">
		    			<a class="new-orderDiv" href="table-reservation.php">
		    				<div class="new-orderImg">
		    					<img src="images/others/dine-in.png" class="img-fluid">
		    				</div>
		    				<div class="new-orderTitle">
		    					<h4>Dine In</h4>
		    				</div>
		    			</a>
		    		</div>
		    		<div class="col-lg-6 col-sm-6 col-xs-12 col-offset-2 col-sm-offset-2">
		    			<a class="new-orderDiv" href="delivery-order.php?deliverytype=pickup">
		    				<div class="new-orderImg">
		    					<img src="images/others/drive-in.png" class="img-fluid">
		    				</div>
		    				<div class="new-orderTitle">
		    					<h4>Pick Up</h4>
		    				</div>
		    			</a>
		    		</div>
		    		<!-- <div class="col-lg-4 col-sm-4 col-xs-12">
		    			<a class="new-orderDiv" href="delivery-order.php?deliverytype=delivery">
		    				<div class="new-orderImg">
		    					<img src="images/others/home-delivery.png" class="img-fluid">
		    				</div>
		    				<div class="new-orderTitle">
		    					<h4>Home Delivery</h4>
		    				</div>
		    			</a>
		    		</div> -->
		    	</div>	
		    </div> 
    	</div>
		         
    </div>

    <?php include'footer.php'; ?>
	
</body>
</html>