<?php
include'config.php';
include'get_session_access.php';
$staff_id = $_GET["id"];
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
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Update Staff Profile</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Staff Profile</a></li>
                            <li class="breadcrumb-item active"><a href="admin-panel.php">Dashboard</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row gx-1">
					<div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-form staff_profile">
                                    <?php 
                                        while($row = mysqli_fetch_array($run_query)) { 
                                        // $f_id = $row['food_id'];
                                        // $f_name = $row['food_name'];
                                        // $f_price = $row['food_price'];
                                        // $f_unit = $row['food_unit'];
                                        // $f_category = $row['food_category'];
                                        // $f_img = $row['food_img'];
                                        
                                        ?>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="form_label">Staff Name..</label>
                                            <input type="text" class="form-control" name="staff_name"  value="<?php echo $row['staff_name'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Date Of Birth</label>
                                            <input type="date" class="form-control" name="staff_dob" value="<?php echo $row['staff_dob'] ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Mobile/Phone Number</label>
                                            <input class="form-control" type="tel" name="staff_phone" value="<?php echo $row['staff_phone'] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label class="form_label">Alternate Mobile/Phone Number</label>
                                            <input class="form-control" type="tel" name="staff_alternatephone" value="<?php echo $row['staff_phone2'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Email Id</label>
                                            <input class="form-control" type="email" name="staff_email" value="<?php echo $row['staff_email'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">City/Village</label>
                                            <input class="form-control" type="text" name="staff_city" value="<?php echo $row['staff_city'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Full Address</label>
                                            <input class="form-control" type="text" name="staff_address" value="<?php echo $row['staff_address'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Role</label>
                                            <input class="form-control" type="text" name="staff_role" value="<?php echo $row['staff_role'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Joining Date</label>
                                            <input class="form-control" type="date" name="staff_joining" value="<?php echo $row['staff_joining'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Salary</label>
                                            <input class="form-control" type="text" name="staff_salary" value="<?php echo $row['staff_salary'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <img class="editable_img" id="editItem" src="images/restro-staff/<?php echo $row['staff_img'] ?>" style="height: 150px;width: 200px;">
                                            <label class="form_label">Profile Image</label>
                                            <input class="form-control" type="file" name="staff_img" src="images/restro-staff/<?php echo $row['staff_img'] ?>" onchange="loadFile(event)">
                                        </div>

                                        <div class="form-group">
                                            <img class="editable_img" id="editItem2" src="images/restro-staff/<?php echo $row['staff_varification'] ?>" style="height: 150px;width: 200px;">
                                            <label class="form_label">Varification ID</label>
                                            <input class="form-control" type="file" name="staff_doc" src="images/restro-staff/<?php echo $row['staff_doc'] ?>" onchange="loadFile2(event)">
                                        </div>
                                        <div class="form-group">
                                            <input class="bttn bttn-submit" type="submit" name="edit_staff" value="Update Staff">
                                        </div>
                                    </form>
                                    <?php
                                    }
                                ?>
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
    var loadFile = function(event) {
    var image = document.getElementById('editItem');
    image.src = URL.createObjectURL(event.target.files[0]);
    };

    var loadFile2 = function(event) {
    var image = document.getElementById('editItem2');
    image.src = URL.createObjectURL(event.target.files[0]);
    };

</script>
	
</body>
</html>

<?php 
if (isset($_POST['edit_staff'])) {
    $staff_name = $_POST['staff_name'];
    $staff_email = $_POST['staff_email'];
    $staff_phone = $_POST['staff_phone'];
    $staff_phone2 = $_POST['staff_phone2'];
    $staff_dob = $_POST['staff_dob'];
    $staff_city = $_POST['staff_city'];
    $staff_role = $_POST['staff_role'];
    $staff_address = $_POST['staff_address'];
    $staff_joining = $_POST['staff_joining'];
    $staff_salary = $_POST['staff_salary'];

    if (($_FILES['staff_img']['name'] != '') && ($_FILES['staff_doc']['name'] != '')) {
        unlink('images/restro-staff/'.$staff_img);
        unlink('images/restro-staff/'.$staff_doc); 
    }
    

    $uploaddir = 'images/restro-staff';
    $staff_img = $_FILES['staff_img']['name'];
    $tmp_staff_img = $_FILES['staff_img']['tmp_name'];
    $staff_path = $uploaddir ."/". $staff_img;
    move_uploaded_file($tmp_staff_img, $staff_path);

    $staff_doc = $_FILES['staff_doc']['name'];
    $tmp_staff_doc = $_FILES['staff_doc']['tmp_name'];
    $staff_doc_path = $uploaddir ."/". $staff_doc;
    move_uploaded_file($tmp_staff_doc, $staff_doc_path);

    $edit_staff_query = "UPDATE restro_staff SET `staff_name` ='$staff_name',`staff_phone`='$staff_phone',`staff_phone2`='$staff_phone2',`staff_email`='$staff_email',`staff_dob`='$staff_dob',`staff_city`='$staff_city',`staff_address`='$staff_address',`staff_joining`='$staff_joining',`staff_salary`='$staff_salary',`staff_img`='$staff_img',`staff_doc`='$staff_doc'  WHERE `staff_id`='$staff_id'";
    $run_staff_query = mysqli_query($conn, $edit_staff_query);
    if ($run_staff_query) {
       echo '<script>alert("Data updated successfully.")</script>';
    }
    else{
        echo '<script>alert("Oops! not updated.")</script>';
    }



}

?>