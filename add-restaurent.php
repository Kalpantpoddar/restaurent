<?php include'config.php';
include'get_session_access.php';
$page_title = "Add Restaurent Info";  
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
                            <h4>Add Restaurent Info</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Add Restaurent Info</a></li>
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
                                    <form>
                                        <div class="form-group">
                                            <label class="form_label">Restaurent Name..</label>
                                            <input type="text" class="form-control" name="staff_name" >
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Date Of Opening</label>
                                            <input type="date" class="form-control" name="staff_dob" >
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Contact Number</label>
                                            <input class="form-control" type="tel" name="staff_phone">
                                        </div>

                                        <div class="form-group">
                                            <label class="form_label">Alternate Contact Number</label>
                                            <input class="form-control" type="tel" name="staff_alternatephone">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Restaurent Email Id</label>
                                            <input class="form-control" type="email" name="staff_email">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">City</label>
                                            <input class="form-control" type="text" name="staff_city">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Full Address</label>
                                            <input class="form-control" type="text" name="staff_address">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Owner Name</label>
                                            <input class="form-control" type="text" name="restaurent_owner">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Owner Mobile No.</label>
                                            <input class="form-control" type="date" name="restaurent_owner_phone">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Restaurent VAT NO.</label>
                                            <input class="form-control" type="number" name="restaurent_vat">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Restaurent GST No.</label>
                                            <input class="form-control" type="text" name="restaurent_gst">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">restaurent Logo</label>
                                            <input class="form-control" type="file" name="restaurent_logo">
                                        </div>

                                        <div class="form-group">
                                            <input class="bttn bttn-submit" type="submit" name="add_restaurent" value="Add Restaurent">
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