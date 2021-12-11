<?php
include'config.php';
include'get_session_access.php';
adminAccess($log_type);
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
									<h4>Restaurent Information</h4>
								</li>
								<li>
									<a href="add-restaurent.php">Add Restaurent</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="restaurent_detailsDiv">
							<div class="restaurent_logo">
								<img src="images/icons/coffee-cup.jpg">
								<h3 class="restaurent_title">Encode Restaurent</h3>
							</div>
							<div class="restaurent_details">
								<div class="clearfix"></div>
								<div class="row">
									<div class="col-lg-12 col-sm-6 col-xs-12">
										<h5>GST IN: <span>23 ABSF8541A 1B5</span></h5>
										
									</div>
									<div class="col-lg-6 col-sm-6 col-xs-12">
										<h4>Contact Details</h4>
										<table>
											<tr>
												<td><h6>Email:</h6></td>
												<td>info@encoderestaurent.com</td>
											</tr>
											<tr>
												<td><h6>Phone Number:</h6></td>
												<td>+91 98542 10367</td>
											</tr>
											<tr>
												<td><h6>Phone Number:</h6></td>
												<td>+91 85201 36974</td>
											</tr>
											<tr>
												<td><h6>Address:</h6></td>
												<td>College Para, Siliguri, Darjeeling</td>
											</tr>
											<tr>
												<td><h6>City:</h6></td>
												<td>Siliguri</td>
											</tr>
										</table>
									</div>
									<div class="col-lg-6 col-sm-6 col-xs-12">
										<h4>Owner Details</h4>
										<table>
											<tr>
												<td><h6>Email:</h6></td>
												<td>thalavijay@gmail.com</td>
											</tr>
											<tr>
												<td><h6>Phone Number:</h6></td>
												<td>+91 98542 10367</td>
											</tr>
											<tr>
												<td><h6>Alternate Phone Number:</h6></td>
												<td>+91 85201 36974</td>
											</tr>
											<tr>
												<td><h6>Address:</h6></td>
												<td>Pradhan Nagar, Siliguri, Darjeeling</td>
											</tr>
										</table>
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