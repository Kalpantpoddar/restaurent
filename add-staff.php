<?php 
include'config.php';
include'get_session_access.php';
$page_title = "Add New Staff";  
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
                            <h4>Add New Staff</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Add New Staff</a></li>
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
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="form_label">Staff Name..</label>
                                            <input type="text" class="form-control" name="staff_name" >
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Date Of Birth</label>
                                            <input type="date" class="form-control" name="staff_dob" >
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Mobile/Phone Number</label>
                                            <input class="form-control" type="tel" name="staff_phone">
                                        </div>

                                        <div class="form-group">
                                            <label class="form_label">Alternate Mobile/Phone Number</label>
                                            <input class="form-control" type="tel" name="staff_phone2">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Email Id</label>
                                            <input class="form-control" type="email" name="staff_email">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">City/Village</label>
                                            <input class="form-control" type="text" name="staff_city">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Full Address</label>
                                            <input class="form-control" type="text" name="staff_address">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Role</label>
                                            <input class="form-control" type="text" name="staff_role" placeholder="Manager/Cashier/Waiter/chef/cleaner">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Joining Date</label>
                                            <input class="form-control" type="date" name="staff_joining">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Salary</label>
                                            <input class="form-control" type="number" name="staff_salary">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Profile Image</label>
                                            <input class="form-control" type="file" name="staff_img">
                                        </div>

                                        <div class="form-group">
                                            <label class="form_label">Varification Document</label>
                                            <input class="form-control" type="file" name="staff_doc">
                                        </div>
                                        <div class="form-group">
                                            <input class="bttn bttn-submit" type="submit" name="add_staff" value="Add New Staff">
                                        </div>
                                    </form>
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
<?php
if (isset($_POST['add_staff'])) {
    $staff_name = $_POST['staff_name'];
    $staff_phone = $_POST['staff_phone'];
    $staff_phone2 = $_POST['staff_phone2'];
    $staff_dob = $_POST['staff_dob'];
    $staff_email = $_POST['staff_email'];
    $staff_city = $_POST['staff_city'];
    $staff_address = $_POST['staff_address'];
    $staff_role = $_POST['staff_role'];
    $staff_joining = $_POST['staff_joining'];
    $staff_salary = $_POST['staff_salary'];
    // $staff_varification = $_POST['staff_varification'];
    // $staff_img = $_POST['staff_img'];

    $uploaddir = 'images/restro-staff';
    if(!is_dir($uploaddir)){
        mkdir($uploaddir);
    }

    $staff_img = $_FILES['staff_img']['name'];
    $tmp_staff_img = $_FILES['staff_img']['tmp_name'];
    $staff_path = $uploaddir ."/". $staff_img;
    move_uploaded_file($tmp_staff_img, $staff_path);

    $staff_doc = $_FILES['staff_doc']['name'];
    $tmp_staff_doc = $_FILES['staff_doc']['tmp_name'];
    $staff_doc_path = $uploaddir ."/". $staff_doc;
    move_uploaded_file($tmp_staff_doc, $staff_doc_path);

    $insert_item = "INSERT INTO restro_staff(`staff_id`, `staff_name`, `staff_phone`, `staff_phone2`, `staff_email`, `staff_dob`, `staff_city`, `staff_address`, `staff_role`, `staff_joining`, `staff_salary`, `staff_img`, `staff_doc`, `restro_id`) VALUES('', '$staff_name', '$staff_phone', '$staff_phone2', '$staff_email', '$staff_dob', '$staff_city', '$staff_address', '$staff_role', '$staff_joining', '$staff_salary', '$staff_img', '$staff_doc', '1')";
    $run_query = mysqli_query($conn, $insert_item) or die($conn);
    if ($run_query) {
        echo '<script>alert("Data inserted.")</script>';
    }
    else{
        echo '<script>alert("Data not inserted.")</script>';
    }

}


?> 