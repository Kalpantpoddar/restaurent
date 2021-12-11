<?php

// error_reporting(0);
	if (!isset($_SESSION['log_type']) && !isset($_SESSION['log_name'])) {

	    echo '<script> window.location.href = "login.php";</script>';
	}
	// else{
	// 	echo '<script> window.location.href = "login.php";</script>';
	// }

// $_SESSION['log_type'];
$log_type = $_SESSION['log_type'];

function adminAccess($log_type){
	if ($log_type != "admin"){
	echo '<script>alert("You are not Admin \n\n You are not allowed to access this page.")</script>';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
	}	
}

function admin_managerAccess($log_type){
	if ($log_type != "admin" && $log_type != "manager"){
	echo '<script>alert("You are not Admin or Manager \n\n You are not allowed to access this page.")</script>';
	// echo '<script>window.location.href="new-order.php";</script>';
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
}



// function adminSessionAccess(){
// 	if ($_SESSION['log_type'] == "admin") {
//     echo '<script>window.location.href="admin-panel.php";</script>';
// 	}
// }
?>