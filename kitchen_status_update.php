<?php 
include'config.php';
include'get_session_access.php';
$kot_phone = $_GET['cust_phone'];
$kot_status = $_GET['kot_status'];
// echo $kot_status;

$edit_status = mysqli_query($conn, "UPDATE kitchen_orderlist SET kot_status = '$kot_status' WHERE cust_phone = '$kot_phone'") or die(mysqli_error($conn));

if ($edit_status) {
	echo "<script>alert('Kitchen status data updated');</script>";
	header('Refresh: 0; URL=kitchen-display.php');
}
else{
	echo "<script>alert('Kitchen status data not updated');</script>";
	header('Refresh: 0; URL=kitchen-display.php');
}
