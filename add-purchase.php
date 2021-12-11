<?php
include'get_session_access.php';
if (isset($_POST['purchase_submit'])) {
	$purchase_date = $_POST['purchase_date'];
	$store_name = $_POST['store_name'];
	$store_phone = $_POST['store_phone'];
	$store_address = $_POST['store_address'];
	$dealer_name = $_POST['dealer_name'];
	$dealer_phone = $_POST['dealer_phone'];
	$dealer_email = $_POST['dealer_email'];
	$total_price = $_POST['total_price'];
	$paid_price = $_POST['paid_price'];
	$due_price = $_POST['due_price'];

	// $item_name = $_POST['item_name'];
	// $item_rate = $_POST['item_rate'];
	// $item_qty = $_POST['item_qty'];
	// $item_total = $_POST['item_total'];

	$insert_data = "INSERT INTO purchase_dealer(dealer_id, dealer_name, dealer_phone, dealer_email, store_name, store_phone, store_address, purchase_date, total_price, paid_price, due_price) VALUES('', '$dealer_name', '$dealer_phone', '$dealer_email', '$store_name', '$store_phone', '$store_address', '$purchase_date', '$total_price' '$paid_price', '$due_price')";
	
	echo $run_query = mysqli_query($conn, $insert_data);
	if ($run_query) {
		echo '<script>alert("Data inserted.")</script>';
	}
	else{
		echo '<script>alert("Oops! Data not inserted.")</script>';
	}
}

?>