<?php include'config.php';
include'get_session_access.php';
$page_title = "Edit Food Items";  
?>
<?php
include'config.php';

$show_item = "SELECT * FROM restro_tables WHERE table_id ='" . $_GET["table_id"] . "'";
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
                                        $t_id = $row['table_id'];
                                        $t_number = $row['table_number'];
                                        $t_seat = $row['table_seat'];
                                        $t_type = $row['table_type'];
                                        $t_status = $row['table_status'];
                                        }
                                        ?>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="form_label">Table Number..</label>
                                            <input type="text" class="form-control" name="table_number" value="<?php echo $t_number ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Table Seat</label>
                                            <input class="form-control" type="number" name="table_seat" value="<?php echo $t_seat ?>">
                                        </div>

                                        <div class="form-group">
                                            <label class="form_label">Table Type</label>
                                            <input class="form-control" type="text" name="table_type" value="<?php echo $t_type ?>" placeholder="Table Type (ac/non_ac/outdoor/garden...)">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Table Status</label>
                                            <input class="form-control" type="text" name="table_status" value="<?php echo $t_status ?>">
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
    $table_number = $_POST['table_number'];
    $table_seat = $_POST['table_seat'];
    $table_type = $_POST['table_type'];
    $table_status = $_POST['table_status'];


    $edit_query = "UPDATE restro_tables SET `table_number`='$table_number',`table_seat`='$table_seat',`table_type`='$table_type',`table_status`='$table_status' WHERE `table_id`='$t_id'";  
    $run_query = mysqli_query($conn, $edit_query);
    if ($run_query) {
       echo '<script>alert("Data updated successfully.")</script>';
       echo '<script>window.location.href="config-tables.php";</script>';
    }
    else{
        echo '<script>alert("Oops! not updated.")</script>';
    }



}

?>

