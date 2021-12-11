<?php 
session_start();
include'config.php';
include'get_session_access.php';
include'function.php';
$page_title = "Order List";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table Order - Encode Restaurent </title>
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
                                                <th>Serial No</th>
                                                <th>Order Id</th>
                                                <th>Customer Phone</th>
                                                <th>Total Payment</th>
                                                <th>Payment Status </th>
                                                <th>Order_date</th>
                                                <th>Cust. Ip</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
$view_table_order = mysqli_query($conn, "SELECT * FROM dinein_order");
if($view_table_order-> num_rows > 0){
    while($row = mysqli_fetch_assoc($view_table_order)){
        $order_id = $row['order_id'];
        $order_date = $row['order_date'];
        $customer_phone = $row['customer_phone'];
        $total_payment = $row['total_payment'];
        $payment_status = $row['payment_status'];
        $customer_ip = $row['customer_ip'];


                        echo "<tr>
                            <td>01</td>
                            <td>0".$order_id."</td>
                            <td>".$customer_phone."</td>
                            <td>".$total_payment."</td>
                            ";
                            if ($payment_status == "paid"){
                                echo "<td><span class='badge light badge-success'>".$payment_status."</span></a></td>";
                            }
                            elseif ($payment_status == "unpaid") {
                                echo "<td><span class='badge light badge-danger'>".$payment_status."</span></a></td>";
                            }
                            echo "<td>".$order_date."</td>
                            <td>".$customer_ip."</td>
                            <td>
                                <div class=''>
                                                        
                                        <a class=' text-dark' href='view_customer_order.php?cust_phone=$customer_phone&order_date=$order_date'>
                                        <svg class='mr-1' xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='#555' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z'></path><circle cx='12' cy='12' r='3'></circle></svg>
                                                            View
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