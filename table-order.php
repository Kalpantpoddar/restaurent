<?php 
include'config.php';
include'get_session_access.php';
include'function.php';
error_reporting(0);

$page_title = "Table Order";

if ($_GET['tableid'] == "") {
	echo "<script>window.location.href ='new-order.php'</script>";
}
else{
	$table_id = $_GET['tableid'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table Order - Encode Restaurent </title>
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
				<div class="row gx-0">

					<div class="col-lg-7 col-sm-12 pr-1">
						<div class="food_list">
							<ul class="nav nav-tabs mb-3">
							<?php
							$show_items = "SELECT * FROM recipe_category";
							$run_query = mysqli_query($conn, $show_items);
                                if($run_query-> num_rows > 0){

                                while($row = mysqli_fetch_assoc($run_query)) { 
                                ?>
							    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#<?php echo $row['recipe_category_name']; ?>"><img class="img-fluid" src="images/icons/<?php echo $row['recipe_category_img']; ?>"> <?php echo $row['recipe_category_name']; ?></a></li>
							    <?php
							    }
							    }
							    ?>
						  	</ul>

						  	<div class="tab-content">
						  		<?php
								$show_items = "SELECT * FROM recipe_category";
								$run_query = mysqli_query($conn, $show_items);
                                if($run_query-> num_rows > 0){

                                while($row = mysqli_fetch_assoc($run_query)) { 
                                $recipe_category = $row['recipe_category_name'];
                                ?>
							    <div id="<?php echo $row['recipe_category_name']; ?>" class="tab-pane fade">
							      	<ul class="food_menu">
							      		<h4><?php echo $row['recipe_category_name']; ?></h4>
									<?php
									$show_data = "SELECT * FROM food_item where food_category = '$recipe_category'";
									$run_data = mysqli_query($conn, $show_data);
		                                if($run_data-> num_rows > 0){

		                                while($result = mysqli_fetch_assoc($run_data)) { 
		                                    ?>
							      		<li>
							      			<div class="food-menuDiv" id="item<?php echo $result['food_id']; ?>">
							      			<img src="images/food-images/<?php echo $result['food_img']; ?>">
							      			<h5><?php echo $result['food_name']; ?></h5>
							      			
							      			<div class="inner_div float-right">
							      				<span class="food_price"><i class="fa fa-inr"></i> <?php echo $result['food_price']; ?></span>
							      				
												<input type="hidden" name="tableId" id="item<?php echo $result['food_id']; ?>_tableId" value="<?php echo $table_id ?>" >

												<input type="hidden" name="foodId" id="item<?php echo $result['food_id']; ?>_foodId" value="<?php echo $result['food_id']; ?>" >
							      				<input type="hidden" name="foodName" id="item<?php echo $result['food_id']; ?>_foodName" value="<?php echo $result['food_name']; ?>" >
							      				<input type="hidden" name="foodPrice" id="item<?php echo $result['food_id']; ?>_foodPrice" value="<?php echo $result['food_price']; ?>" >	
							      				<input type="submit" id="" class="addItem" value="Add to Cart" onclick="cart('item<?php echo $result['food_id']; ?>')">	
							      				
							      			</div>
								      		</div>

								      	</li>
										<?php
									    }
									    }
									    ?>
							      	</ul>
							    </div>
							    <div id="status"></div>
							     <?php
							    }
							    }
							    ?>
							    
						  	</div>
						</div>
					</div>
					<div class="col-lg-5 col-sm-12 pl-1">
						<form action="customer-order.php" method="POST">
							<div class="fooding_form">

								<div id="dine-in" class="">
									<ul class="list-inline">
										<li class="list-inline-item">
											<input type="hidden" id="tableId" name="table_Id" value="<?php echo $table_id; ?>">
											<h4>Table No. <?php echo $table_id; ?></h4>
										</li>
									</ul>
								    
									<div class="customer_details">
									<!-- <h5>Enter Customer Details</h5> -->
									    
<?php
$ip_add = getUserIp();
$customer_phone = "";
$view_order = mysqli_query($conn, "SELECT * FROM dinein_order WHERE table_id = '$table_id'");
	if($view_order-> num_rows > 0){
	while($row = mysqli_fetch_assoc($view_order)){ 
		$customer_phone = $row['customer_phone'];
		$payment_status = $row['payment_status'];

		}
	}
if($customer_phone != "" && $payment_status = ""){
	$show_customer_details = "SELECT * FROM customer_details WHERE customer_phone = '$customer_phone'";
	$run_cust_table = mysqli_query($conn, $show_customer_details);

	if($run_cust_table-> num_rows > 0){
	while($row = mysqli_fetch_assoc($run_cust_table)){ 

echo "<h5>Customer Details</h5>";
echo '<input type="tel" name="customer_phone" maxlength="10" placeholder="Mobile Number**" value="'.$row['customer_phone'].'" required >';
									   
echo '<input type="text" name="customer_name" placeholder="Mobile Name" value="'.$row['customer_name'].'" required >';
									    						   
echo '<input type="text" name="customer_address" placeholder="Mobile Address" value="'.$row['customer_address'].'" required >';
									    							    
echo '<input type="text" name="customer_locality" placeholder="Nearby Location" value="'.$row['nearby_location'].'" required >';
}
}								    
}
else{
echo "<h5>Enter Customer Details</h5>";
echo '<input type="tel" name="customer_phone" maxlength="10" placeholder="Mobile Number" required>';	
echo '<input type="text" name="customer_name" placeholder="Customer Name" required>';
echo '<input type="text" name="customer_address" placeholder="Customer Address" required>';
echo '<input type="text" name="customer_locality" placeholder="Nearby Location" required>';
}
?> 
									      		
									</div>
									<div class="customer_order">
									     	<table class="list-inline order_list">
									      	<thead>
									      		<tr>
										      		<th>ITEMS</th>
											      	<th>QTY</th>
											      	<th>PRICE/QTY</th>
											      	<th>PRICE</th>
											      	<th>ACTION</th>
										      	</tr>
									      	</thead>
									      	<tbody id="display_cart">
									      				 
									      	</tbody>
									    </table>
									</div>
									<div class="totalCost">
									    <ul class="list-inline">
									      	<li><label>Total Price:</label></li>
											<li><input type="text" name="total_price" id="totalprice" class="totalprice" readonly></li>		
									    </ul>
									</div>
								</div>
							</div>
							<div class="order_buttons"> 
								<input type="submit" class="btn btn-primary" name="print_order"  value="PLACE ORDER">
							</div>
						</form>
							
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

<?php include'footer.php'; ?>
<script type="text/javascript">

$('.food_list > .nav-tabs > li:first-child > a.nav-link').addClass('active');
$('.food_list > .tab-content > .tab-pane:first-child').addClass('show active');


function cart_display(){
	var table_id = document.getElementById("tableId").value;
	$.ajax({
		url: "display_dinein_cart.php",
		method:"POST",
		data: {table_id: table_id},
		datatype:"text",
		success: function(data){
			$('#display_cart').html(data);
		}
	});
}
cart_display();

function cart(id){

	var ee=document.getElementById(id);

	var foodId = document.getElementById(id+"_foodId").value;
	var foodName = document.getElementById(id+"_foodName").value;
	var foodPrice = document.getElementById(id+"_foodPrice").value;
	var tableId = document.getElementById(id+"_tableId").value;

	var qty = 1;

	$.ajax({
		url: "insert_dine_cart.php",
		type: "POST",
		data: {food_id: foodId,food_name: foodName,table_id: tableId,food_qty: qty,food_price:foodPrice},
		success: function(msg){
			$('#status').html(msg);
			cart_display();
		}
	});
}

$(document).on("click", ".delete-btn", function(){
	var foodId = $(this).data("id");
	var element = this;

	$.ajax({
		url: "delete_cart_item.php",
		type: "POST",
		data: {food_id:foodId},
		success: function(cart_msg){
			$('#cartStatus').html(cart_msg);
			cart_display();
		}
	});
});


// ---------------Calculating Cart Price---------------
$(document).ready(function(){
	update_amounts();
    $('.order_item').load(function() {
        update_amounts();
    });
});
    
function update_amounts(){
    
    $("table").on("change", ".foodqty", function() {
    	var subtotalVal = 0;
	    var row = $(this).closest("tr");
	    var fid = parseFloat(row.find(".foodId").val());
	    var qty = parseFloat(row.find(".foodqty").val());
	    var price = parseFloat(row.find(".foodprice").val());
	    var total = 0;
      	total = qty * price;
      	$.ajax({
	    	url: "update_cart.php",
	    	method: "POST",
	    	cache: false,
	    	data: {food_id:fid,food_qty:qty,food_price:price},
	    	success:function(msg){
	    		$('.totalprice').html(msg);
	    	}
	    });
	     row.find(".foodAmount").val(isNaN(total) ? "" : total);
	    $('.foodAmount').each(function() {
	        subtotalVal += parseFloat($(this).val());
	        $('.totalprice').val((subtotalVal).toFixed(2));
	    });
	    
    });
    $("table").on("load", function(){
    	 row.find(".foodAmount").val(isNaN(total) ? "" : total);
	    $('.foodAmount').each(function() {
	        subtotalVal += parseFloat($(this).val());
	        $('.totalprice').val((subtotalVal).toFixed(2));
	    });
    });
}

</script>
</body>
</html>