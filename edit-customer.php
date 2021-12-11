<?php include'config.php';
include'get_session_access.php';
$page_title = "Edit Food Items";  
?>
<?php
include'config.php';
$cust_id = $_GET["customer_id"];
$show_item = "SELECT * FROM customer_details WHERE customer_id ='" . $_GET["customer_id"] . "'";
$run_query = mysqli_query($conn, $show_item);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer Configuration || Encode Restaurent - Admin Dashboard </title>
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
                            <h4>Edit Customer Config Details</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Customer Configuration Details</a></li>
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
                                        $cust_name = $row['customer_name'];
                                        $cust_address = $row['customer_address'];
                                        $cust_phone = $row['customer_phone'];
                                        $cust_location = $row['nearby_location'];
                                        $cust_ip = $row['ip_add'];
                                        }
                                        ?>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="form_label">Customer Name..</label>
                                            <input type="text" class="form-control" name="cust_name" value="<?php echo $cust_name; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Customer Phone</label>
                                            <input class="form-control" type="number" name="cust_phone" value="<?php echo $cust_phone ?>">
                                        </div>

                                        <div class="form-group">
                                            <label class="form_label">customer Address</label>
                                            <input class="form-control" type="text" name="cust_address" value="<?php echo $cust_address ?>" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Customer Nearby Location</label>
                                            <input class="form-control" type="text" name="cust_location" value="<?php echo $cust_location ?>">
                                        </div>

                                        <div class="form-group">
                                            <label class="form_label">Customer Ip</label>
                                            <input class="form-control" type="text" name="cust_ip" value="<?php echo $cust_ip ?>" disabled>
                                        </div>

                                        <div class="form-group">
                                            <input class="bttn bttn-submit" type="submit" name="edit_item" value="Edit Item">
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
if (isset($_POST['edit_item'])){
    $cust_name = $_POST['cust_name'];
    $cust_phone = $_POST['cust_phone'];
    $cust_address = $_POST['cust_address'];
    $cust_location = $_POST['cust_location'];


    $edit_query = "UPDATE customer_details SET `customer_name`='$cust_name',`customer_phone`='$cust_phone',`customer_address`='$cust_address',`nearby_location`='$cust_location' WHERE `customer_id`='$cust_id'";  
    $run_query = mysqli_query($conn, $edit_query);
    if ($run_query) {
       echo '<script>alert("Data updated successfully.")</script>';
       echo '<script>window.location.href="config-customer.php";</script>';
    }
    else{
        echo '<script>alert("Oops! not updated.")</script>';
    }



}

?>

