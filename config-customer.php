<?php 
include'config.php';
include'get_session_access.php';
include'function.php';
$page_title = "Customer Configuration";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer Configuration - Encode Restaurent </title>
    <?php include'style.php'; ?>
</head>
<body>
    <div id="main-wrapper">
    <?php include'header.php'; ?>
    <?php include'sidebar.php'; ?>
        <div class="content-body">
			<div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-body customer_orderlist">
                                <div class="table-responsive">
                                    <table id="example4" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>customer Id</th>
                                                <th>customer Name</th>
                                                <th>customer Phone</th>
                                                <th>customer Address</th>
                                                <th>customer Location</th>
                                                <th>customer Ip</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
$view_restro_table = mysqli_query($conn, "SELECT * FROM customer_details");
if($view_restro_table-> num_rows > 0){
    while($row = mysqli_fetch_assoc($view_restro_table)){
        $customer_id = $row['customer_id'];


                        echo "<tr>
                            <td>".$row['customer_id'].".</td>
                            <td>".$row['customer_name']."</td>
                            <td>".$row['customer_phone']."</td>
                            <td>".$row['customer_address']."</td>
                            <td>".$row['nearby_location']."</td>
                            <td>".$row['ip_add']."</td>
                            <td>
                                <div class=''>
                                                        
                                    <a class=' text-dark' href='edit-customer.php?customer_id=$customer_id'>
                                        <svg class='mr-1' xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='#555' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'><path d='M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34'></path><polygon points='18 2 22 6 12 16 8 16 8 12 18 2'></polygon></svg>
                                    </a>
                                </div>
                            </td>
                            
                        </tr>";

    }
}
?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include'footer.php'; ?>
</body>
</html>