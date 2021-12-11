<?php
include'config.php';
include'get_session_access.php';

// if (isset($_GET['id'])) {
//     $staff_id = $_GET['id'];

    $show_item = "SELECT * FROM restro_staff WHERE staff_id ='" . $_GET["id"] . "'";
    $run_query = mysqli_query($conn, $show_item);

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
<?php
   while($row = mysqli_fetch_array($run_query)) { 
        $row['staff_id'];
?>				
                <div class="row">

                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="profile-info">
                                    <div class="profile-photo">
                                        <img src="images/restro-staff/<?php echo $row['staff_img']; ?>" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <div class="profile-details">
                                        <div class="profile-name px-3 pt-2">
                                            <h4 class="text-primary mb-0"><?php echo $row['staff_name']; ?></h4>
                                            <p><?php echo $row['staff_role']; ?></p>
                                        </div>
                                        <div class="profile-email px-2 pt-2">
                                            <h4 class="text-muted mb-0"><?php echo $row['staff_email']; ?></h4>
                                            <p>Email</p>
                                        </div>
                                        <div class="dropdown ml-auto mt-2">
                                            <a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="dropdown-item"><a href="staff-edit.php?id=<?php echo $row['staff_id']; ?>"><i class="fa fa-user-circle text-primary mr-2"></i> Edit profile</a></li>
                                                <li class="dropdown-item"><a href="user-management.php"><i class="fa fa-users text-primary mr-2"></i> Back to Staff Table</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="profile-personal-info">
                            <h4 class="text-primary mb-2">Personal Information</h4>
                            <div class="row mb-2">
                                <div class="col-3">
                                    <h5 class="f-w-500">Name <span class="pull-right">:</span>
                                    </h5>
                                </div>
                                <div class="col-9"><span><?php echo $row['staff_name']; ?></span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3">
                                    <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                    </h5>
                                </div>
                                <div class="col-9"><span><?php echo $row['staff_email']; ?></span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3">
                                    <h5 class="f-w-500">Date of Birth <span class="pull-right">:</span></h5>
                                 </div>
                                <div class="col-9"><span><?php echo $row['staff_dob']; ?></span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3">
                                    <h5 class="f-w-500">Phone Number <span class="pull-right">:</span></h5>
                                </div>
                                <div class="col-9"><span>+91 <?php echo $row['staff_phone']; ?></span>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-3">
                                    <h5 class="f-w-500">Alternate Phone Number <span class="pull-right">:</span></h5>
                                </div>
                                <div class="col-9"><span>+91 <?php echo $row['staff_phone2']; ?></span>
                                </div>
                            </div>
                                                    
                            <div class="row mb-2">
                                <div class="col-3">
                                     <h5 class="f-w-500">joining Date<span class="pull-right">:</span></h5>
                                </div>
                                <div class="col-9"><span><?php echo $row['staff_joining']; ?></span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3">
                                    <h5 class="f-w-500">Salary<span class="pull-right">:</span></h5>
                                </div>
                                <div class="col-9"><span><i class="fa fa-inr"></i> <?php echo $row['staff_salary']; ?></span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3">
                                    <h5 class="f-w-500">Address <span class="pull-right">:</span>
                                    </h5>
                                </div>
                                <div class="col-9"><span><?php echo $row['staff_address']; ?></span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3">
                                    <h5 class="f-w-500">City <span class="pull-right">:</span></h5>
                                </div>
                                <div class="col-9"><span><?php echo $row['staff_city']; ?></span>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-3">
                                    <h5 class="f-w-500">Document Proof <span class="pull-right">:</span></h5>
                                </div>
                                <div class="col-9">
                                    <div class="document_img" id="animated-thumbnails-gallery">
                                        <a href="images/restro-staff/<?php echo $row['staff_doc']; ?>">
                                        <img src="images/restro-staff/<?php echo $row['staff_doc']; ?>"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
}

?>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

    <?php include'footer.php'; ?>
    <script type="text/javascript">
        lightGallery(document.getElementById('animated-thumbnails-gallery'), {
    thumbnail: true,
});

    </script>

    <div class="modal fade" id="addCategory">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
             	<div class="modal-header">
                 	<h5 class="modal-title">Add Category</h5>
                 	<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
             	</div>
             	<div class="modal-body">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Category Name">
                    </div>
                    <div class="form-group">
                        <input class="bttn bttn-submit" type="submit" value="Add Category">
                    </div>
             	</div>
            </div>
        </div>
    </div>
	
</body>
</html>