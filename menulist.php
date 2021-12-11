<?php
include'config.php';
include'get_session_access.php';
admin_managerAccess($log_type);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Encode Restaurent - Admin Dashboard </title>
    <?php include'style.php'; ?>
</head>
<body>
    <div id="main-wrapper">

        <div class="nav-header">
            <a href="index-2.html" class="brand-logo">
                <img class="logo-abbr" src="images/logo.png" alt="">
                <img class="brand-title" src="images/logo-white.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Food Menu List
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                        	<li class="nav-item dropdown notification_dropdown">
                                <a class="new_orderLink" href="table-reservation.php">NEW ORDER</a>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="new_orderLink" href="kitchen-display.php">KOT</a>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="new_orderLink" href="add-product.php">ADD ITEMS</a>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:;" role="button" data-toggle="dropdown">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21.75 14.8385V12.0463C21.7471 9.88552 20.9385 7.80353 19.4821 6.20735C18.0258 4.61116 16.0264 3.61555 13.875 3.41516V1.625C13.875 1.39294 13.7828 1.17038 13.6187 1.00628C13.4546 0.842187 13.2321 0.75 13 0.75C12.7679 0.75 12.5454 0.842187 12.3813 1.00628C12.2172 1.17038 12.125 1.39294 12.125 1.625V3.41534C9.97361 3.61572 7.97429 4.61131 6.51794 6.20746C5.06159 7.80361 4.25291 9.88555 4.25 12.0463V14.8383C3.26257 15.0412 2.37529 15.5784 1.73774 16.3593C1.10019 17.1401 0.751339 18.1169 0.75 19.125C0.750764 19.821 1.02757 20.4882 1.51969 20.9803C2.01181 21.4724 2.67904 21.7492 3.375 21.75H8.71346C8.91521 22.738 9.45205 23.6259 10.2331 24.2636C11.0142 24.9013 11.9916 25.2497 13 25.2497C14.0084 25.2497 14.9858 24.9013 15.7669 24.2636C16.548 23.6259 17.0848 22.738 17.2865 21.75H22.625C23.321 21.7492 23.9882 21.4724 24.4803 20.9803C24.9724 20.4882 25.2492 19.821 25.25 19.125C25.2486 18.117 24.8998 17.1402 24.2622 16.3594C23.6247 15.5786 22.7374 15.0414 21.75 14.8385ZM6 12.0463C6.00232 10.2113 6.73226 8.45223 8.02974 7.15474C9.32723 5.85726 11.0863 5.12732 12.9212 5.125H13.0788C14.9137 5.12732 16.6728 5.85726 17.9703 7.15474C19.2677 8.45223 19.9977 10.2113 20 12.0463V14.75H6V12.0463ZM13 23.5C12.4589 23.4983 11.9316 23.3292 11.4905 23.0159C11.0493 22.7026 10.716 22.2604 10.5363 21.75H15.4637C15.284 22.2604 14.9507 22.7026 14.5095 23.0159C14.0684 23.3292 13.5411 23.4983 13 23.5ZM22.625 20H3.375C3.14298 19.9999 2.9205 19.9076 2.75644 19.7436C2.59237 19.5795 2.50014 19.357 2.5 19.125C2.50076 18.429 2.77757 17.7618 3.26969 17.2697C3.76181 16.7776 4.42904 16.5008 5.125 16.5H20.875C21.571 16.5008 22.2382 16.7776 22.7303 17.2697C23.2224 17.7618 23.4992 18.429 23.5 19.125C23.4999 19.357 23.4076 19.5795 23.2436 19.7436C23.0795 19.9076 22.857 19.9999 22.625 20Z" fill="#3E4954"/>
									</svg>
									<span class="badge light text-white bg-primary">12</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px;">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											 <li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
                                    <a class="all-notification" href="javascript:;">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="javascript:;">
                                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M20.4604 0.848846H3.31682C2.64742 0.849582 2.00565 1.11583 1.53231 1.58916C1.05897 2.0625 0.792727 2.70427 0.791992 3.37367V15.1562C0.792727 15.8256 1.05897 16.4674 1.53231 16.9407C2.00565 17.414 2.64742 17.6803 3.31682 17.681C3.53999 17.6812 3.75398 17.7699 3.91178 17.9277C4.06958 18.0855 4.15829 18.2995 4.15843 18.5226V20.3168C4.15843 20.6214 4.24112 20.9204 4.39768 21.1817C4.55423 21.4431 4.77879 21.6571 5.04741 21.8008C5.31602 21.9446 5.61861 22.0127 5.92292 21.998C6.22723 21.9833 6.52183 21.8863 6.77533 21.7173L12.6173 17.8224C12.7554 17.7299 12.9179 17.6807 13.0841 17.681H17.187C17.7383 17.68 18.2742 17.4993 18.7136 17.1664C19.1531 16.8334 19.472 16.3664 19.6222 15.8359L22.8965 4.05007C22.9998 3.67478 23.0152 3.28071 22.9413 2.89853C22.8674 2.51634 22.7064 2.15636 22.4707 1.8466C22.2349 1.53684 21.9309 1.28565 21.5822 1.1126C21.2336 0.93954 20.8497 0.849282 20.4604 0.848846ZM21.2732 3.60301L18.0005 15.3847C17.9499 15.5614 17.8432 15.7168 17.6964 15.8274C17.5496 15.938 17.3708 15.9979 17.187 15.9978H13.0841C12.5855 15.9972 12.098 16.1448 11.6836 16.4219L5.84165 20.3168V18.5226C5.84091 17.8532 5.57467 17.2115 5.10133 16.7381C4.62799 16.2648 3.98622 15.9985 3.31682 15.9978C3.09365 15.9977 2.87966 15.909 2.72186 15.7512C2.56406 15.5934 2.47534 15.3794 2.47521 15.1562V3.37367C2.47534 3.15051 2.56406 2.93652 2.72186 2.77871C2.87966 2.62091 3.09365 2.5322 3.31682 2.53206H20.4604C20.5905 2.53239 20.7187 2.56274 20.8352 2.62073C20.9516 2.67872 21.0531 2.7628 21.1318 2.86643C21.2104 2.97005 21.2641 3.09042 21.2886 3.21818C21.3132 3.34594 21.3079 3.47763 21.2732 3.60301Z" fill="#3E4954"/>
										<path d="M5.84161 8.42333H10.0497C10.2729 8.42333 10.4869 8.33466 10.6448 8.17683C10.8026 8.019 10.8913 7.80493 10.8913 7.58172C10.8913 7.35851 10.8026 7.14445 10.6448 6.98661C10.4869 6.82878 10.2729 6.74011 10.0497 6.74011H5.84161C5.6184 6.74011 5.40433 6.82878 5.2465 6.98661C5.08867 7.14445 5 7.35851 5 7.58172C5 7.80493 5.08867 8.019 5.2465 8.17683C5.40433 8.33466 5.6184 8.42333 5.84161 8.42333Z" fill="#3E4954"/>
										<path d="M13.4161 10.1065H5.84161C5.6184 10.1065 5.40433 10.1952 5.2465 10.353C5.08867 10.5109 5 10.7249 5 10.9481C5 11.1714 5.08867 11.3854 5.2465 11.5433C5.40433 11.7011 5.6184 11.7898 5.84161 11.7898H13.4161C13.6393 11.7898 13.8534 11.7011 14.0112 11.5433C14.169 11.3854 14.2577 11.1714 14.2577 10.9481C14.2577 10.7249 14.169 10.5109 14.0112 10.353C13.8534 10.1952 13.6393 10.1065 13.4161 10.1065Z" fill="#3E4954"/>
									</svg>
									<span class="badge light text-white bg-primary">5</span>
                                </a>
							</li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link text-danger" href="tel:+91 98765 43210"><i class="fa fa-phone"></i> +91 98765 43210</a>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="mailto:info@encoderesto.com"><i class="fa fa-envelope"></i> info@encoderesto.com</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

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
							    <li><a data-toggle="tab" href="#fast-food">Fast Food</a></li>
							    <li><a data-toggle="tab" href="#beverage">Beveages</a></li>
							    <li><a data-toggle="tab" href="#drinks">Drinks</a></li>
							    <li><a data-toggle="tab" href="#veg-item">Veg Items</a></li>
							    <li><a data-toggle="tab" href="#non-veg-item">Non-Veg Items</a></li>
							    <li><a data-toggle="tab" href="#deserts">Deserts</a></li>

							    <li><a data-toggle="tab" href="#starter">Starter</a></li>
							    <li><a data-toggle="tab" href="#breakfast">Breakfast</a></li>
							    <li><a data-toggle="tab" href="#mains">Mains</a></li>
						  	</ul>
						</div>
						<div class="tab-content">
							<div id="fast-food" class="tab-pane fade in active show">
								<div class="table-responsive">
									<table id="example5" class="display mb-4 dataTablesCard">
										<thead>
                                            <tr>
                                                <th><strong class="font-w600">ID</strong></th>
                                                <th><strong class="font-w600">Name</strong></th>
                                                <th><strong class="font-w600 wspace-no">Category</strong></th>
                                                <th><strong class="font-w600">Price</strong></th>
                                                <th><strong class="font-w600">Unit</strong></th>
                                                <th><strong class="font-w600 wspace-no">Best Selling</strong></th>
                                                <th><strong class="font-w600">Image</strong></th>
                                                <th><strong class="font-w600">Action</strong></th>

                                            </tr>
                                        </thead>
										<tbody>
											<?php
											$show_items = "SELECT * FROM food_item WHERE food_category = 'fast-food'";
											$run_query = mysqli_query($conn, $show_items);
                                            if($run_query-> num_rows > 0){

                                             while($row = mysqli_fetch_assoc($run_query)) { 
                                                $food_id = $row['food_id'];
                                                $food_name = $row['food_name'];
                                                $food_price = $row['food_price'];
                                                $food_unit = $row['food_unit'];
                                                $food_category = $row['food_category'];
                                                $food_img = $row['food_img'];

											echo "<tr>
												<td>".$food_id.".</td>
												<td class='wspace-no'>".$food_name."</td>
												<td>".$food_category."</td>
												<td><i class='fa fa-inr'></i> ".$food_price."/-</td>
												<td>".$food_unit."</td>
												<td>50 Sell</td>
												<td>
													<div class='menulist_img'>
														<img src='images/food-images/".$food_img."'>
													</div>
												</td>
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
                                                echo "<span style='color:#fe0002;font-size:15px;'>Banner list is Empty.</span>";
                                            }

                                             ?>

										</tbody>
									</table>
								</div>
							</div>
							<div id="drinks" class="tab-pane fade">
								<div class="table-responsive">
									<table class="display dataTable example4 mb-4">
										<thead>
                                            <tr>
                                                <th><strong class="font-w600">ID</strong></th>
                                                <th><strong class="font-w600">Name</strong></th>
                                                <th><strong class="font-w600 wspace-no">Category</strong></th>
                                                <th><strong class="font-w600">Price</strong></th>
                                                <th><strong class="font-w600">Unit</strong></th>
                                                <th><strong class="font-w600 wspace-no">Best Selling</strong></th>
                                                <th><strong class="font-w600">Image</strong></th>
                                                <th><strong class="font-w600">Action</strong></th>

                                            </tr>
                                        </thead>
										<tbody>
											<?php
											$show_items = "SELECT * FROM food_item WHERE food_category = 'drinks'";
											$run_query = mysqli_query($conn, $show_items);
                                            if($run_query-> num_rows > 0){

                                             while($row = mysqli_fetch_assoc($run_query)) { 
                                                $food_id = $row['food_id'];
                                                $food_name = $row['food_name'];
                                                $food_price = $row['food_price'];
                                                $food_unit = $row['food_unit'];
                                                $food_category = $row['food_category'];
                                                $food_img = $row['food_img'];

											echo "<tr>
												<td>".$food_id.".</td>
												<td class='wspace-no'>".$food_name."</td>
												<td>".$food_category."</td>
												<td><i class='fa fa-inr'></i> ".$food_price."/-</td>
												<td>".$food_unit."</td>
												<td>50 Sell</td>
												<td>
													<div class='menulist_img'>
														<img src='images/food-images/".$food_img."'>
													</div>
												</td>
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
                                                echo "<span style='color:#fe0002;font-size:15px;'>Banner list is Empty.</span>";
                                            }

                                             ?>

										</tbody>
									</table>
								</div>
							</div>
							<div id="veg-item" class="tab-pane fade">
								<div class="table-responsive">
									<table id="" class="display dataTable example4 mb-4">
										<thead>
                                            <tr>
                                                <th><strong class="font-w600">ID</strong></th>
                                                <th><strong class="font-w600">Name</strong></th>
                                                <th><strong class="font-w600 wspace-no">Category</strong></th>
                                                <th><strong class="font-w600">Price</strong></th>
                                                <th><strong class="font-w600">Unit</strong></th>
                                                <th><strong class="font-w600 wspace-no">Best Selling</strong></th>
                                                <th><strong class="font-w600">Image</strong></th>
                                                <th><strong class="font-w600">Action</strong></th>

                                            </tr>
                                        </thead>
										<tbody>
											<?php
											$show_items = "SELECT * FROM food_item WHERE food_category = 'veg'";
											$run_query = mysqli_query($conn, $show_items);
                                            if($run_query-> num_rows > 0){

                                             while($row = mysqli_fetch_assoc($run_query)) { 
                                                $food_id = $row['food_id'];
                                                $food_name = $row['food_name'];
                                                $food_price = $row['food_price'];
                                                $food_unit = $row['food_unit'];
                                                $food_category = $row['food_category'];
                                                $food_img = $row['food_img'];

											echo "<tr>
												<td>".$food_id.".</td>
												<td class='wspace-no'>".$food_name."</td>
												<td>".$food_category."</td>
												<td><i class='fa fa-inr'></i> ".$food_price."/-</td>
												<td>".$food_unit."</td>
												<td>50 Sell</td>
												<td>
													<div class='menulist_img'>
														<img src='images/food-images/".$food_img."'>
													</div>
												</td>
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
                                                echo "<span style='color:#fe0002;font-size:15px;'>Banner list is Empty.</span>";
                                            }

                                             ?>

										</tbody>
									</table>
								</div>
							</div>
							<div id="non-veg-item" class="tab-pane fade">
								<div class="table-responsive">
									<table class="display dataTable example4 mb-4">
										<thead>
                                            <tr>
                                                <th><strong class="font-w600">ID</strong></th>
                                                <th><strong class="font-w600">Name</strong></th>
                                                <th><strong class="font-w600 wspace-no">Category</strong></th>
                                                <th><strong class="font-w600">Price</strong></th>
                                                <th><strong class="font-w600">Unit</strong></th>
                                                <th><strong class="font-w600 wspace-no">Best Selling</strong></th>
                                                <th><strong class="font-w600">Image</strong></th>
                                                <th><strong class="font-w600">Action</strong></th>

                                            </tr>
                                        </thead>
										<tbody>
											<?php
											$show_items = "SELECT * FROM food_item WHERE food_category = 'non-veg'";
											$run_query = mysqli_query($conn, $show_items);
                                            if($run_query-> num_rows > 0){

                                             while($row = mysqli_fetch_assoc($run_query)) { 
                                                $food_id = $row['food_id'];
                                                $food_name = $row['food_name'];
                                                $food_price = $row['food_price'];
                                                $food_unit = $row['food_unit'];
                                                $food_category = $row['food_category'];
                                                $food_img = $row['food_img'];

											echo "<tr>
												<td>".$food_id.".</td>
												<td class='wspace-no'>".$food_name."</td>
												<td>".$food_category."</td>
												<td><i class='fa fa-inr'></i> ".$food_price."/-</td>
												<td>".$food_unit."</td>
												<td>50 Sell</td>
												<td>
													<div class='menulist_img'>
														<img src='images/food-images/".$food_img."'>
													</div>
												</td>
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
                                                echo "<span style='color:#fe0002;font-size:15px;'>Banner list is Empty.</span>";
                                            }

                                             ?>

										</tbody>
									</table>
								</div>
							</div>
							<div id="deserts" class="tab-pane fade">
								<div class="table-responsive">
									<table class="display dataTable example4 mb-4">
										<thead>
                                            <tr>
                                                <th><strong class="font-w600">ID</strong></th>
                                                <th><strong class="font-w600">Name</strong></th>
                                                <th><strong class="font-w600 wspace-no">Category</strong></th>
                                                <th><strong class="font-w600">Price</strong></th>
                                                <th><strong class="font-w600">Unit</strong></th>
                                                <th><strong class="font-w600 wspace-no">Best Selling</strong></th>
                                                <th><strong class="font-w600">Image</strong></th>
                                                <th><strong class="font-w600">Action</strong></th>

                                            </tr>
                                        </thead>
										<tbody>
											<?php
											$show_items = "SELECT * FROM food_item WHERE food_category = 'desert'";
											$run_query = mysqli_query($conn, $show_items);
                                            if($run_query-> num_rows > 0){

                                             while($row = mysqli_fetch_assoc($run_query)) { 
                                                $food_id = $row['food_id'];
                                                $food_name = $row['food_name'];
                                                $food_price = $row['food_price'];
                                                $food_unit = $row['food_unit'];
                                                $food_category = $row['food_category'];
                                                $food_img = $row['food_img'];

											echo "<tr>
												<td>".$food_id.".</td>
												<td class='wspace-no'>".$food_name."</td>
												<td>".$food_category."</td>
												<td><i class='fa fa-inr'></i> ".$food_price."/-</td>
												<td>".$food_unit."</td>
												<td>50 Sell</td>
												<td>
													<div class='menulist_img'>
														<img src='images/food-images/".$food_img."'>
													</div>
												</td>
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
                                                echo "<span style='color:#fe0002;font-size:15px;'>Banner list is Empty.</span>";
                                            }

                                             ?>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-sm-12">
						<div class="page_title">
							<h3>All Food Items</h3>
						</div>
						<div class="">
								<div class="table-responsive">
									<table class="display dataTable example4 mb-4">
										<thead>
                                            <tr>
                                                <th><strong class="font-w600">ID</strong></th>
                                                <th><strong class="font-w600">Name</strong></th>
                                                <th><strong class="font-w600 wspace-no">Category</strong></th>
                                                <th><strong class="font-w600">Price</strong></th>
                                                <th><strong class="font-w600">Unit</strong></th>
                                                <th><strong class="font-w600 wspace-no">Best Selling</strong></th>
                                                <th><strong class="font-w600">Image</strong></th>
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
                                                $food_unit = $row['food_unit'];
                                                $food_category = $row['food_category'];
                                                $food_img = $row['food_img'];

											echo "<tr>
												<td>".$food_id.".</td>
												<td class='wspace-no'>".$food_name."</td>
												<td>".$food_category."</td>
												<td><i class='fa fa-inr'></i> ".$food_price."/-</td>
												<td>".$food_unit."</td>
												<td>50 Sell</td>
												<td>
													<div class='menulist_img'>
														<img src='images/food-images/".$food_img."'>
													</div>
												</td>
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