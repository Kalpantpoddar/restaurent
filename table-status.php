<?php
include'config.php';

$id = $_GET['id'];
$status = $_GET['status'];

$sql = mysqli_query($conn, "UPDATE restro_tables SET table_status = '$status' WHERE table_id = '$id'");
header('location:config-tables.php');


?>