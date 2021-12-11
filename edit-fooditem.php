<?php include'config.php';
include'get_session_access.php';
$page_title = "Edit Food Items";  

$show_item = "SELECT * FROM food_item WHERE food_id ='" . $_GET["id"] . "'";
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
                                        $f_id = $row['food_id'];
                                        $f_name = $row['food_name'];
                                        $f_price = $row['food_price'];
                                        $f_unit = $row['food_unit'];
                                        $f_category = $row['food_category'];
                                        $f_img = $row['food_img'];
                                        }
                                        ?>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="form_label">Food Name..</label>
                                            <input type="text" class="form-control" name="food_name" value="<?php echo $f_name ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Food Price</label>
                                            <input class="form-control" type="number" name="food_price" value="<?php echo $f_price ?>">
                                        </div>

                                        <div class="form-group">
                                            <label class="form_label">Food Unit</label>
                                            <input class="form-control" type="text" name="food_unit" value="<?php echo $f_unit ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form_label">Food Category</label>
                                            <input class="form-control" type="text" name="food_category" value="<?php echo $f_category ?>">
                                        </div>
                                        <div class="form-group">
                                            <img class="editable_img" id="editItem" src="images/food-images/<?php echo $f_img ?>" style="height: 150px;width: 200px;">
                                            <label class="form_label">Food Image</label>
                                            <input class="form-control" type="file" name="food_img" src="images/food-images/<?php echo $f_img ?>" onchange="loadFile(event)">
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

<script type="text/javascript">
    var loadFile = function(event) {
    var image = document.getElementById('editItem');
    image.src = URL.createObjectURL(event.target.files[0]);
    };

</script>
</body>
</html>

<?php 
if (isset($_POST['edit_item']) && ($_FILES['food_img']['name'] != '')) {
    $f_name = $_POST['food_name'];
    $f_price = $_POST['food_price'];
    $f_unit = $_POST['food_unit'];
    $f_category = $_POST['food_category'];
    $f_name = $_POST['food_name'];

    unlink('images/food-images/'.$f_img);

    $uploaddir = 'images/food-images';
    $food_img = $_FILES['food_img']['name'];
    $tmp_food_img = $_FILES['food_img']['tmp_name'];
    $food_path = $uploaddir ."/". $food_img;

    if(move_uploaded_file($tmp_food_img, $food_path)){
    $edit_query = "UPDATE food_item SET `food_name`='$f_name',`food_price`='$f_price',`food_unit`='$f_unit',`food_category`='$f_category',`food_img`='$food_img' WHERE `food_id`='$f_id'";  
    $run_query = mysqli_query($conn, $edit_query);
    if ($run_query) {
       echo '<script>alert("Data updated successfully.")</script>';
    }
    else{
        echo '<script>alert("Oops! not updated.")</script>';
    }

}

}

?>

