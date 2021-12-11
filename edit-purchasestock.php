<?php include'config.php';
include'get_session_access.php';
$page_title = "Edit Purchase Items";  
?>
<?php
include'config.php';

$show_item = "SELECT * FROM purchase_items WHERE item_id ='" . $_GET["id"] . "'";
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
                                        $item_id = $row['item_id'];
                                        $item_name = $row['item_name'];
                                        $item_rate = $row['item_rate'];
                                        $item_qty = $row['item_qty'];
                                        $purchase_stock = $row['purchase_stock'];
                                        }
                                        ?>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="form_label">Item Name..</label>
                                            <input type="text" class="form-control" name="item_name" value="<?php echo $item_name ?>" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Item Price</label>
                                            <input class="form-control" type="number" name="item_rate" value="<?php echo $item_rate ?>" autocomplete="off">
                                        </div>

                                        <div class="form-group">
                                            <label class="form_label">Item Qty</label>
                                            <input class="form-control" type="text" name="item_qty" value="<?php echo $item_qty ?>" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Stock Limit</label>
                                            <input class="form-control" type="text" name="purchase_stock" value="<?php echo $purchase_stock ?>" autocomplete="off">
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

<!-- <script type="text/javascript">
    var loadFile = function(event) {
    var image = document.getElementById('editItem');
    image.src = URL.createObjectURL(event.target.files[0]);
    };
</script> -->
</body>
</html>

<?php 
if (isset($_POST['edit_item'])) {
    $item_name = $_POST['item_name'];
    $item_rate = $_POST['item_rate'];
    $item_qty = $_POST['item_qty'];
    $purchase_stock = $_POST['purchase_stock'];

    $edit_query = "UPDATE purchase_items SET `item_name`='$item_name',`item_rate`='$item_rate',`item_qty`='$item_qty',`purchase_stock`='$purchase_stock' WHERE `item_id`='$item_id'";  
    $run_query = mysqli_query($conn, $edit_query);
    if ($run_query) {
       echo '<script>alert("Data updated successfully.")</script>';
       echo '<script>window.location.href="stock-quantity.php";</script>';
    }
    else{
        echo '<script>alert("Oops! not updated.")</script>';
    }

}



?>

