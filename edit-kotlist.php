<?php include'config.php';
include'get_session_access.php';
$page_title = "Edit Food Items";  
?>
<?php
include'config.php';

$show_item = "SELECT * FROM kitchen_orderlist WHERE kot_id ='" . $_GET["id"] . "'";
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
                            <h4>Edit Table Configuration</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Table Details</a></li>
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
                                        $kot_id = $row['kot_id'];
                                        $kot_status = $row['kot_status'];
                                        $cust_phone = $row['cust_phone'];
                                        $order_id = $row['order_id'];
                                        $order_type = $row['order_type'];
                                        $order_date = $row['order_date'];
                                        }
                                        ?>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="form_label">KOT Id.</label>
                                            <input type="text" class="form-control" name="kot_status" value="<?php echo $kot_id ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">KOT Status..</label>
                                            <input type="text" class="form-control" name="kot_status" value="<?php echo $kot_status ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Customer Phone</label>
                                            <input class="form-control" type="number" name="cust_phone" value="<?php echo $cust_phone ?>" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="form_label">Order Type</label>
                                            <input class="form-control" type="text" name="order_type" value="<?php echo $order_type ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Order Time</label>
                                            <input class="form-control" type="text" name="order_date" value="<?php echo $order_date ?>" disabled>
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
    $kot_status = $_POST['kot_status'];


    $edit_query = "UPDATE kitchen_orderlist SET `kot_status`='$kot_status' WHERE `kot_id`='$kot_id'";  
    $run_query = mysqli_query($conn, $edit_query);
    if ($run_query) {
       echo '<script>alert("Data updated successfully.")</script>';
       echo '<script>window.location.href="kitchen_orderlist.php";</script>';
    }
    else{
        echo '<script>alert("Oops! not updated.")</script>';
    }



}

?>

