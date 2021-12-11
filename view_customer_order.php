<?php 
include'config.php';
include'get_session_access.php';
include'function.php';
$page_title = "Customer Order Details.";
$customer_phone = $_GET['cust_phone'];
$order_date = $_GET['order_date'];
// echo $customer_phone, $order_date;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Print Order Details || Encode Restro </title>
    <?php include'style.php'; ?>
</head>
<body style="">
    <div id="main-wrapper">

        <div class="">
			<div class="container py-2 px-5">
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-md-12">
						<div class="row gx-0">
							
							<div class="col-xl-12 col-md-12 col-sm-12 col-xs-12">
								<div class="btn-group mb-3 float-right">
									<button class="btn pdf_bttn px-5 py-2 fs-16" onclick="pdfDownload('customer_details')">Print PDF</button>
								</div>
							</div>
							<div class="col-xl-12 col-md-12 col-sm-12 col-xs-12">
								<div class="card customer_details_card" id="customer_details">
<?php
$t_amount = 0;
$view_cust_info = mysqli_query($conn, "SELECT * FROM customer_details WHERE customer_phone = '$customer_phone'");
if($view_cust_info-> num_rows > 0){
    while($res = mysqli_fetch_assoc($view_cust_info)){
$t_amount = $res['total_payment'];
?>
								<ul class="list-inline">
									<li class="list-inline-item border-bottom">
										<div class="media align-items-center p-0">
											<div class="media-body">
												<h4 class="mb-0" style="background: #da477cc9;color: #fff;display: table;padding: 7px 50px 7px 15px;">User: <?php echo $res['customer_name'] ;?> </h4>
											</div>
										</div>
									</li>
									<li class="list-inline-item border-bottom">
										<div class="media align-items-center">
											<svg class="mr-2" width="13" height="13" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M22.9993 17.4712V20.7831C23.0006 21.0906 22.9375 21.3949 22.814 21.6766C22.6906 21.9583 22.5096 22.2112 22.2826 22.419C22.0556 22.6269 21.7876 22.7851 21.4958 22.8836C21.2039 22.9821 20.8947 23.0187 20.5879 22.991C17.1841 22.6219 13.9145 21.4611 11.0418 19.6019C8.36914 17.9069 6.10319 15.6455 4.40487 12.9781C2.53545 10.0981 1.37207 6.81909 1.00898 3.40674C0.981336 3.10146 1.01769 2.79378 1.11572 2.50329C1.21376 2.2128 1.37132 1.94586 1.57839 1.71947C1.78546 1.49308 2.03749 1.31221 2.31843 1.18836C2.59938 1.06451 2.90309 1.0004 3.21023 1.00011H6.52869C7.06551 0.994834 7.58594 1.18456 7.99297 1.53391C8.4 1.88326 8.66586 2.36841 8.74099 2.89892C8.88106 3.9588 9.14081 4.99946 9.5153 6.00106C9.66413 6.39619 9.69634 6.82562 9.60812 7.23847C9.51989 7.65131 9.31494 8.03026 9.01753 8.33042L7.61272 9.73245C9.18739 12.4963 11.4803 14.7847 14.2496 16.3562L15.6545 14.9542C15.9552 14.6574 16.3349 14.4528 16.7486 14.3648C17.1622 14.2767 17.5925 14.3089 17.9884 14.4574C18.992 14.8312 20.0348 15.0904 21.0967 15.2302C21.6341 15.3058 22.1248 15.576 22.4756 15.9892C22.8264 16.4024 23.0128 16.9298 22.9993 17.4712Z" stroke="#566069" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
											<h4 class="mb-0 text-black fs-13"><?php echo $customer_phone; ?></h4>
										</div>
									</li>
									<li class="list-inline-item border-bottom">
										<div class="media align-items-center">
											<svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#49545e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="10" r="3"/><path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z"/></svg>
											<h4 class="mb-0 text-black fs-13">Siliguri</h4>
										</div>
									</li>
									<li class="list-inline-item border-bottom">
										<div class="media align-items-center">
											<svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#49545e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M16.2 7.8l-2 6.3-6.4 2.1 2-6.3z"/></svg>
											<h4 class="mb-0 text-black fs-13">Post Office</h4>
										</div>
									</li>
								</ul>
<?php
}
}
?>
								<!-- </div>
							</div>
							<div class="col-xl-7 col-md-7 col-sm-12 col-xs-12">
								<div class="card customer_details_card"> -->
									<div class="card-header">
										<h4>Order Description: </h4>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive order-list">
											<table class="table items-table customer_item_table mb-0">
												<tbody><tr style="background:#c3c3c3;color:#fff;line-height:1;">
													<th class="my-0 font-w500 fs-16">Items</th>
													<th style="width:10%;" class="my-0 font-w500 fs-16">Qty</th>
													<th style="width:10%;" class="my-0 font-w500 fs-16">Price</th>
													<th class="my-0 font-w500 fs-16 wspace-no d-md-none d-lg-table-cell">Sub Total</th>
												</tr>
<?php
// echo $customer_phone;
$orderList = mysqli_query($conn, "SELECT * FROM table_orderlist t1 INNER JOIN food_item t2
ON t1.food_id = t2.food_id WHERE customer_phone = '$customer_phone'");
if($orderList-> num_rows > 0){
    while($row = mysqli_fetch_assoc($orderList)){

// $orderlist1 = mysqli_query($conn, "SELECT *
// FROM table_orderlist
// INNER JOIN food_item
// ON table_orderlist.'food_id' = food_item.'food_id'")
?>
												<tr>
													<td>
														<div class="media">
															
															<div class="media-body">
																<small class="mt-0 mb-1 font-w500" style="margin-top: 0;margin-bottom: 5px;font-size:10px;"><a class="text-primary" style="text-decoration:none;" href="javascript:void(0);"><?php echo $row['food_category'] ?></a></small>
																<h5 class="mt-0 mb-2 mb-1 fs-15" style="margin-top: 0;margin-bottom: 5px;font-size:15px;"><a class="text-black" style="text-decoration:none;" href="ecom-product-detail.html"><?php echo $row['food_name'] ?></a></h5>
																
															</div>
														</div>
													</td>
													<td>
														<h4 class="my-0 text-secondary font-w600 fs-16" style="margin:0;font-size:15px;font-weight:600;"><?php echo $row['food_qty'] ?>x</h4>
													</td>
													<td>
														<h4 class="my-0 text-secondary font-w600 fs-16" style="margin:0;font-size:15px;font-weight:600;"><i class="fa fa-inr"></i> <?php echo $row['food_price'] ?></h4>
													</td>
													<td class="d-md-none d-lg-table-cell">
														<h4 class="my-0 text-secondary font-w600 fs-16" style="margin:0;font-size:15px;font-weight:600;"><i class="fa fa-inr"></i> <?php echo $row['order_subtotal'] ?></h4>
													</td>
													
												</tr>
<?php
	}
}
?>
												<tr>
													<td class="text-dark font-w600 fs-20" style="margin:0;font-size:15px;font-weight:600;" colspan="3">Total Amount</td>
													<td class="d-md-none d-lg-table-cell text-dark font-w600 fs-20"><i class="fa fa-inr"></i> <?php echo $t_amount; ?></td>
												</tr>
											</tbody>
										</table>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
<?php include'footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
<script type="text/javascript">
	function pdfDownload(paravalue) {
	
	window.print();


};

// var element = document.getElementById("pdfDownload");
// element.addEventListener("click", onClick);
</script>
</body>
</html>