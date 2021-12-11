<?php 
include'config.php';
include'get_session_access.php';
include'function.php';
$page_title = "Table Configuration";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table Configuration - Encode Restaurent </title>
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
                        <div class="table_headerMenu">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a  data-toggle="modal" data-target="#addNewTable">Add Table</a></li>
                            </ul>
                        </div>
                        <div class="card">
                            <div class="card-body customer_orderlist">
                                <div class="table-responsive">
                                    <table id="example4" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Table Id</th>
                                                <th>Table Number</th>
                                                <th>Table Seats</th>
                                                <th>Table Type</th>
                                                <th>Table Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
$view_restro_table = mysqli_query($conn, "SELECT * FROM restro_tables");
if($view_restro_table-> num_rows > 0){
    while($row = mysqli_fetch_assoc($view_restro_table)){
        $table_id = $row['table_id'];
        $table_status = $row['table_status'];


                        echo "<tr>
                            <td>".$row['table_id'].".</td>
                            <td>".$row['table_number']."</td>
                            <td>".$row['table_seat']."</td>
                            <td>".$row['table_type']."</td>
                            ";
                            if ($table_status == "0"){
                                echo "<td><a href='table-status.php?id=".$row['table_id']."&status=1'><span class='badge light badge-success'>Empty (".$table_status.")</span></a></td>";
                            }
                            elseif ($table_status == "1") {
                                echo "<td><a href='table-status.php?id=".$row['table_id']."&status=0'><span class='badge light badge-danger'>Reserved (".$table_status.")</span></a></td>";
                            }
                            echo "<td>
                                <div class=''>
                                                        
                                    <a class=' text-dark' href='edit-table.php?table_id=$table_id'>
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

    <div class="modal fade" id="addNewTable">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Table</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <input class="form-control" type="text" name="table_number" placeholder="Table Number (table 1/table 2/table 3...)">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="number" name="table_seat" placeholder="Table Seats (4/6/10/16/20...)">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="table_type" placeholder="Table Type (ac/non_ac/outdoor/garden...)">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="table_status" placeholder="Table Status (0)" value="0" disabled>
                        </div>

                        <div class="form-group">
                            <input class="bttn bttn-submit" type="submit" name="add_table" value="Submit Data">
                        </div>
                    </form>
                        
                </div>
            </div>
        </div>
    </div>
</body>
</html>