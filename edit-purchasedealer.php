<?php include'config.php';
include'get_session_access.php';
$page_title = "Edit Purchase Dealer Details";  
?>
<?php
include'config.php';

$show_item = "SELECT * FROM purchase_dealer WHERE dealer_id ='" . $_GET["id"] . "'";
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
                            <h4>Edit Food Item Details</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Food Item Details</a></li>
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
                                        $dealer_id = $row['dealer_id'];
                                        $dealer_name = $row['dealer_name'];
                                        $dealer_phone = $row['dealer_phone'];
                                        $dealer_email = $row['dealer_email'];

                                        $store_name = $row['store_name'];
                                        $store_phone = $row['store_phone'];
                                        $store_address = $row['store_address'];
                                        $purchase_date = $row['purchase_date'];
                                        
                                        $total_price = $row['total_price'];
                                        $paid_price = $row['paid_price'];
                                        $due_price = $row['due_price'];
                                        }
                                        ?>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="form_label">Dealer Name..</label>
                                            <input type="text" class="form-control" name="dealer_name" value="<?php echo $dealer_name ?>" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Dealer Phone</label>
                                            <input class="form-control" type="number" name="dealer_phone" value="<?php echo $dealer_phone ?>" autocomplete="off">
                                        </div>

                                        <div class="form-group">
                                            <label class="form_label">Dealer Email</label>
                                            <input class="form-control" type="email" name="dealer_email" value="<?php echo $dealer_email ?>" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Store Name</label>
                                            <input class="form-control" type="text" name="store_name" value="<?php echo $store_name ?>" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Store Phone</label>
                                            <input class="form-control" type="tel" name="store_phone" value="<?php echo $store_phone ?>" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Store Address</label>
                                            <input class="form-control" type="text" name="store_address" value="<?php echo $store_address ?>" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Purchase Date</label>
                                            <input class="form-control" type="text"  id="datepicker" name="purchase_date" value="<?php echo $purchase_date ?>" autocomplete="off">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Total Price</label>
                                            <input class="form-control totalPrice" type="number" name="total_price" value="<?php echo $total_price ?>" autocomplete="off">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="form_label">Paid Price</label>
                                            <input class="form-control paidPrice" type="number" name="paid_price" value="<?php echo $paid_price ?>" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Due Price</label>
                                            <input class="form-control duePrice" type="number" name="due_price" value="<?php echo $due_price ?>" autocomplete="off">
                                        </div>

                                        <div class="form-group">
                                            <input class="bttn bttn-submit" type="submit" name="edit_dealerDetails" value="Edit Item">
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

<script type="text/javascript">
 $(document).on("change keyup blur", ".paidPrice", function() {
            var total = $('.totalPrice').val();
            var paid = $('.paidPrice').val();
            // var due = $('.duePrice').val();
            var result = total - paid;
            $('.duePrice').val(result);
        });

</script>
</body>
</html>

<?php 
if (isset($_POST['edit_dealerDetails'])) { 
    $dealer_name = $_POST['dealer_name'];
    $dealer_phone = $_POST['dealer_phone'];
    $dealer_email = $_POST['dealer_email'];
    $store_name = $_POST['store_name'];
    $store_phone = $_POST['store_phone'];
    $store_address = $_POST['store_address'];

    $purchase_date = $_POST['purchase_date'];
    $total_price = $_POST['total_price'];
    $paid_price = $_POST['paid_price'];
    $due_price = $_POST['due_price'];

    $edit_query = "UPDATE purchase_dealer SET `dealer_name`='$dealer_name',`dealer_phone`='$dealer_phone',`dealer_email`='$dealer_email',`store_name`='$store_name',`store_phone`='$store_phone',`store_address`='$store_address',`purchase_date`='$purchase_date',`total_price`='$total_price',`paid_price`='$paid_price',`due_price`='$due_price' WHERE `dealer_id`='$dealer_id'";
    echo $edit_query;
    $run_query = mysqli_query($conn, $edit_query);
    if ($run_query) {
       echo '<script>alert("Data updated successfully.")</script>';
       echo '<script>window.location.href="purchase-summary.php";</script>';
    }
    else{
        echo '<script>alert("Oops! not updated.")</script>';
    }

}

?>

