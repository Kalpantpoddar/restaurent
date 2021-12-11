<?php include'config.php'; 
include'get_session_access.php';
$page_title = "Sales Report";  
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
							    <li class="active"><a data-toggle="tab" href="#sellingProducts">Sell Summary</a></li>
							    <li><a data-toggle="tab" href="#recipe">Add Food Recipe</a></li>
						  	</ul>

						  	<div class="tab-content">
							    <div id="sellingProducts" class="tab-pane fade in active show">
							      	<div class="table-responsive">
										<table id="example5" class="display mb-4 dataTablesCard">
											<thead>
	                                            <tr>
	                                                <th><strong class="font-w600">ID</strong></th>
	                                                <th><strong class="font-w600">Food Name</strong></th>
	                                                <th><strong class="font-w600">Price</strong></th>
	                                                <th><strong class="font-w600">Qty</strong></th>

	                                                <th><strong class="font-w600">Food Stock</strong></th>
	                                                <th><strong class="font-w600">Status</strong></th>
	                                                <th><strong class="font-w600">Action</strong></th>

	                                            </tr>
	                                        </thead>
											<tbody>
											<?php
											$show_items = "select * from food_item";
											$run_query = mysqli_query($conn, $show_items);
                                            if($run_query-> num_rows > 0){	

                                             while($row = mysqli_fetch_assoc($run_query)) { 
                                                $food_id = $row['food_id'];
                                                $food_name = $row['food_name'];
                                                $food_price = $row['food_price'];
                                                $food_qty = floatval($row['food_qty']);
                                                $food_stock = floatval($row['food_stock']);
                                                $status = "";
												if ($food_qty == 0){
													$status = "empty";
												}
												else if($food_qty <= $food_stock * 0.25){
													$status = "Critical";
												}
												else if($food_qty <= $food_stock * 0.5){
													$status = "Nearing";
												}
												else if($food_qty >= $food_stock * 0.5){
													$status = "Surplus";
												}
												else{
													$status = "Not Measuring";
												}

												

											echo "<tr>
												<td>".$food_id.".</td>
												<td class='wspace-no'>".$food_name."</td>
												<td><i class='fa fa-inr'></i>".$food_price."</td>
												<td>".$food_qty."</td>
												<td>".$food_stock."</td>
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
							    <div id="recipe" class="tab-pane fade">
							      	<div class="recipe_div">
							      	<h4>Add Recipe Ingradients</h4>
							      	<div class="clearfix"></div>
								      	<div class="row">
								      		<div class="col-lg-6 col-sm-12 col-offset-right">	
									      		<form action="" method="POST">
									      			<div class="form-group">
			                                            <input class="form-control" name="recipe_name" type="text" placeholder="Recipe Item Name">
			                                        </div>
				                                    <table class="table" id="dynamic_field">
				                                        <tr>
				                                        	<td>
				                                        		<input type="text" id="ingradient_name" name="ingradient_name[]" class="form-control" placeholder="Ingradient Name">
				                                        	</td>
				                                        	<td>
				                                        		<input type="text" id="ingradient_qty" name="ingradient_qty[]" class="form-control" placeholder="Ingradient Quantity">
				                                        	</td>
				                                        	<td>
				                                        		<button type="button" id="add" name="add_ingradient" class="btn btn-success">+</button>
				                                        	</td>
				                                        </tr>
				                                    </table>
				                                  	<div class="form-group">
				                                        <input class="bttn bttn-submit" type="submit" name="add_recipe">
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
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" id="ingradient_name" name="ingradient_name[]]" class="form-control" placeholder="Ingradient Name"></td><td><input type="text" id="ingradient_qty" name="ingradient_qty[]" class="form-control" placeholder="Ingradient Quantity"></td><td><button id="'+i+'" name="remove_ingradient" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
	});
	
});

	</script>
</body>
</html>

<?php

if (isset($_POST['add_recipe'])) {
	$recipe_name = $_POST['recipe_name'];
	$ingradient_name = $_POST['ingradient_name'];
	$ingradient_qty = $_POST['ingradient_qty'];

      	foreach ($ingradient_name as $index => $recipes) {
	      	$ing_name = $recipes;
	      	$ing_qty = $ingradient_qty[$index];

	      	$insert_recipes = "INSERT INTO `recipe_items`(`recipe_id`, `recipe_name`, `ingradient_name`, `ingradient_qty`) VALUES ('','$recipe_name','$ing_name','$ing_qty')";

	    	$run_recipeData = mysqli_query($conn, $insert_recipes);
			
      	}
  		if ($run_recipeData) {
			echo '<script>alert("Items inserted.")</script>';
		}
		else{
			echo '<script>alert("Oops! Items not inserted.")</script>';
		}

   	
}

?>