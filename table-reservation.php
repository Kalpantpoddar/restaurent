<?php include'config.php';
include'get_session_access.php';
$page_title = "Table Reservation Order";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table Reservation - Encode Restaurent </title>
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
				<div class="row">
					<!-- <div class="col-lg-12 col-sm-12">	
						<div class="table_headerMenu">
							<ul class="list-inline float-right">
								<li class="list-inline-item"><a >+ Table Reservation</a></li>
								<li class="list-inline-item"><a href="delivery-order.php">Delivery</a></li>
								<li class="list-inline-item"><a href="pickup-order.php">Pick Up</a></li>
								<li class="list-inline-item"><a  data-toggle="modal" data-target="#addTables">Add Table</a></li>

							</ul>
						</div>
					</div> -->
					<div class="col-lg-12 col-sm-12">
						<div class="table_indicators">
							<ul class="list-inline float-left mt-3">
								<li class="list-inline-item"><span class="span1"></span>Blank Table/Clear Table</li>
								<li class="list-inline-item"><span class="span3"></span>Reserved Table</li>
								<li class="list-inline-item"><a class="kot_anchor" href="config-tables.php">Table Status</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-12 col-sm-12">
						<div class="table_div">
							<h4>AC Tables</h4>
							<ul class="list-inline">
<?php
$show_tables = "SELECT * FROM restro_tables";
$run_process = mysqli_query($conn, $show_tables);
if($run_process-> num_rows > 0){
$id = 0;
while($row = mysqli_fetch_assoc($run_process)) { 
							if ($row['table_status'] == 1) {
								echo "<li><a href='table-order.php?tableid=".$row['table_id']."' class='table_confirmed'>".$row['table_number']."<span>Table Reserved</span></a></li>";
							}
							else{
								echo "<li><a href='table-order.php?tableid=".$row['table_id']."'>".$row['table_number']." <span>Capacity: ".$row['table_seat']."</span></a></li>";
							}

}
}
?>
							</ul>
							<!-- <h4>AC Tables</h4>
							<ul class="list-inline">
								<li><a href="table-order.php">table 9 <span>6 seat</span></a></li>
								<li><a href="table-order.php">table 10 <span>6 seat</span></a></li>
								<li><a href="table-order.php">table 11 <span>6 seat</span></a></li>
								<li><a href="">table 12 <span>6 seat</span></a></li>
								<li><a href="">table 13 <span>6 seat</span></a></li>
								<li><a href="">table 14 <span>6 seat</span></a></li>
							</ul>

							<h4>AC Long Tables</h4>
							<ul class="list-inline">
								<li><a href="table-order.php">table 15 <span>10 seat</span></a></li>
								<li><a href="table-order.php">table 16 <span>20 seat</span></a></li>
							</ul> -->
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
if (isset($_POST['add_table'])) {
	$table_number = $_POST['table_number'];
	$table_seat = $_POST['table_seat'];
	$table_type = $_POST['table_type'];
	$table_status = $_POST['table_status'];

	$insert_table = "INSERT INTO restro_tables(table_id, table_number, table_seat, table_type, table_status) VALUES('', '$table_number', '$table_seat', '$table_type', '$table_status')";
	$run_query = mysqli_query($conn, $insert_table);
	if($run_query) {
		echo '<script>alert("Data inserted.")</script>';
	}
	else{
		echo '<script>alert("Data not inserted.")</script>';
	}

}



?>