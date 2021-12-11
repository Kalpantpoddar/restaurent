<?php
include'get_session_access.php';
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
						<div class="summary_list">
							<ul class="list-inline">
								<li>
									<h4>Food Item Summary</h4>
								</li>
								<li>
									<a href="add-product.php">Highest Selling Item</a>
								</li>
								<li>
									<a href="add-product.php">Hourly Selling Item</a>
								</li>
								<li>
									<a href="add-product.php">Highest Selling Item</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-12">
								<div class="table-responsive mt-3">
									<table id="example5" class="display mb-4 dataTablesCard">
										<thead>
                                            <tr>
                                                <th><strong class="font-w600">S No.</strong></th>
                                                <th><strong class="font-w600">Item</strong></th>
                                                <th><strong class="font-w600 wspace-no">Item Code</strong></th>
                                                <th><strong class="font-w600 wspace-no">Category</strong></th>
                                                <th><strong class="font-w600">Qty</strong></th>
                                                <th><strong class="font-w600">Total (<i class="fa fa-inr"></i> 25750)</strong></th>

                                            </tr>
                                        </thead>
										<tbody>
											<tr>
												<td>1.</td>
												<td class="wspace-no">Vanilla Milk Shake</td>
												<td>19</td>
												<td>Drink Shakes</td>
												<td>50 Sell</td>
												<td><i class="fa fa-inr"></i> 4000</td>
											</tr>
											<tr>
												<td>2.</td>
												<td class="wspace-no">Strawberry Shale</td>
												<td>18</td>
												<td>Drink Shakes</td>
												<td>35 Sell</td>
												<td><i class="fa fa-inr"></i> 3500</td>
											</tr>
											<tr>
												<td>3.</td>
												<td class="wspace-no">Chocolate Shake</td>
												<td>20</td>
												<td>Drink Shakes</td>
												<td>20 Sell</td>
												<td><i class="fa fa-inr"></i> 2000</td>
											</tr>
											<tr>
												<td>4.</td>
												<td class="wspace-no">Vanilla Milk Shake</td>
												<td>17</td>
												<td>Drink Shakes</td>
												<td>50 Sell</td>
												<td><i class="fa fa-inr"></i> 4000</td>
											</tr>
											<tr class="subtotal_row">
												<td colspan="5">Subtotal:</td>
												<td><i class="fa fa-inr"></i>12000</td>
											</tr>
											<tr>
												<td>1.</td>
												<td class="wspace-no">Vanilla Milk Shake</td>
												<td>19</td>
												<td>Drink Shakes</td>
												<td>50 Sell</td>
												<td><i class="fa fa-inr"></i> 4000</td>
											</tr>
											<tr>
												<td>2.</td>
												<td class="wspace-no">Strawberry Shale</td>
												<td>18</td>
												<td>Drink Shakes</td>
												<td>35 Sell</td>
												<td><i class="fa fa-inr"></i> 3500</td>
											</tr>
											<tr>
												<td>3.</td>
												<td class="wspace-no">Chocolate Shake</td>
												<td>20</td>
												<td>Drink Shakes</td>
												<td>20 Sell</td>
												<td><i class="fa fa-inr"></i> 2000</td>
											</tr>
											<tr>
												<td>2.</td>
												<td class="wspace-no">Strawberry Shale</td>
												<td>18</td>
												<td>Drink Shakes</td>
												<td>35 Sell</td>
												<td><i class="fa fa-inr"></i> 3500</td>
											</tr>
											<tr>
												<td>3.</td>
												<td class="wspace-no">Chocolate Shake</td>
												<td>20</td>
												<td>Drink Shakes</td>
												<td>20 Sell</td>
												<td><i class="fa fa-inr"></i> 2000</td>
											</tr>
											<tr>
												<td>4.</td>
												<td class="wspace-no">Vanilla Milk Shake</td>
												<td>17</td>
												<td>Drink Shakes</td>
												<td>50 Sell</td>
												<td><i class="fa fa-inr"></i> 4000</td>
											</tr>
											<tr class="subtotal_row">
												<td colspan="5">Subtotal:</td>
												<td><i class="fa fa-inr"></i>12000</td>
											</tr>
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