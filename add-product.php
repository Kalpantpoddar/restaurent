<?php include'config.php'; 
include'get_session_access.php';
$page_title = "Add New Product";  
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
                            <h4>Add Food Items</h4>
                            <span>Element</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Add Food Items</a></li>
                            <li class="breadcrumb-item active"><a href="admin-panel.php">Dashboard</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row gx-1">
					
					<div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Food Item Category..</label>
                                            <select class="form-control" name="food_category">
                                                <option disabled>Choose Food Category</option>
                                                <option value="fast-food">Fast Food</option>
                                                <option value="beverage">Beverage</option>
                                                <option value="drinks">Drinks</option>
                                                <option value="veg">Veg</option>
                                                <option value="non-veg">Non-Veg</option>
                                                <option value="desert">Deserts</option>
                                                <option value="starter">Starter</option>
                                                <option value="breakfast">Breakfast</option>
                                                <option value="mains">Mains</option>
                                                <option value="add category" disabled>Others</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="food_unit">
                                                <option>Food Item Unit..</option>
                                                <option value="piece">Piece</option>
                                                <option value="plate">Plate</option>
                                                <option value="cup">cup</option>
                                                <option value="glass">glass</option>
                                                <option value="add unit" disabled>Others</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="food_name" type="text" placeholder="Food Item Name" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="number" name="food_price" placeholder="Food Item Price">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" name="food_img" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input class="bttn bttn-submit" type="submit" name="add_product" value="Add Item">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-lg-6 col-sm-6 col-xs-12">
						<div class="add_form">

                            <div class="form-group">
                                <a data-toggle="modal" data-target="#addCategory">Add Food Category</a>
                                <a data-toggle="modal" data-target="#addUnit">Add Food Unit</a>
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


    <div class="modal fade" id="addUnit">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
             	<div class="modal-header">
                 	<h5 class="modal-title">Add Unit</h5>
                 	<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
             	</div>
             	<div class="modal-body">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Unit Name">
                    </div>
                    <div class="form-group">
                        <input class="bttn bttn-submit" type="submit" value="Add Unit">
                    </div>
             	</div>
            </div>
        </div>
    </div>
	
</body>
</html>

<?php
if (isset($_POST['add_product'])) {
    $food_name = $_POST['food_name'];
    $food_price = $_POST['food_price'];
    $food_unit = $_POST['food_unit'];
    $food_category = $_POST['food_category'];

    $uploaddir = 'images/food-images';
    if(!is_dir($uploaddir)){
        mkdir($uploaddir);
    }
    $food_img = $_FILES['food_img']['name'];
    $tmp_food_img = $_FILES['food_img']['tmp_name'];
    $food_path = $uploaddir ."/". $food_img;

    if(move_uploaded_file($tmp_food_img, $food_path)){

    $insert_item = "INSERT INTO food_item(food_id, food_name, food_price, food_unit, food_category, food_img) VALUES('', '$food_name', '$food_price', '$food_unit', '$food_category', '$food_img')";
    

}
    $run_query = mysqli_query($conn, $insert_item);
    if($run_query) {
        echo '<script>alert("Data inserted.")</script>';
    }
    else{
        echo '<script>alert("Data not inserted.")</script>';
    }
}
?>