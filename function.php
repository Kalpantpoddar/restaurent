<?php 
require'config.php';

function getUserIP(){
	switch (true) {
		case (!empty($_SERVER['HTTP_X_REAL_IP'])): return $_SERVER['HTTP_X_REAL_IP'];

		case (!empty($_SERVER['HTTP_CLIENT_IP'])): return $_SERVER['HTTP_CLIENT_IP'];

		case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])): return $_SERVER['HTTP_X_FORWARDED_FOR'];
		
		default: return $_SERVER['REMOTE_ADDR'];
	}
}

// function orderDate(){
// 	$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
// 	echo $date->format('Y-m-d H:i:s');
// }

function totalDineOrder(){
global $conn;
$dine_orderlist = mysqli_query($conn, "SELECT * FROM dinein_order ORDER BY order_id");
$dinedata=mysqli_num_rows($dine_orderlist);
return $dinedata;
}

?>