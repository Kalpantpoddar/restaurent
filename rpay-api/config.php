<?php
session_start();
$keyId = 'rzp_test_BudSmZXEOocuwh';
$keySecret = 'cYYOhdIJFFmsm11f2x88INWT';
$displayCurrency = 'INR';

//These should be commented out in production
// This is for error reporting
// Add it to config.php to report any errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database Details
$server = 'localhost';   
$user = 'root'; 
$database = 'encode_restro';  
$password = '';  
$conn = mysqli_connect($server, $user, $password, $database);  
if($conn) {
  // echo "database connected.";
}
else{
	
	die('Could not connect:'.mysql_error()) ;
}
