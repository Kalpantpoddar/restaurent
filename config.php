<?php 
session_start();
error_reporting(0);
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

?> 