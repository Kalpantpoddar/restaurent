<?php
session_start();
error_reporting(0);
include'config.php';
?> 
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
<title>Encode Restaurent - User Registration</title>
<?php include'style.php'; ?>
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-10">
                    <div class="authincation_content">
                        <div class="row no-gutters">
                            <div class="col-xl-7 col-md-7 col-sm-6 col-xs-12">
                                <div class="authincation_body">
                                    <img src="images/others/chef-bro.png" class="authincation_img1">
                                    <div class="authincation_overlay">
                                        <div class="overlay_content">
                                            <p>Become a part of our team and manage your restaurent fast and smoothly.</p>
                                            <h3>Welcome in Encode Restro Group</h3>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="auth-form">
                                    <h4 class="text-center text-primary mb-4">Log In</h4>
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="log_user" class="form-control">
                                            <label class="form_label mb-1">User Name</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="log_pass" id="typePass" class="form-control" >
                                            <label class="form_label mb-1">Password</label>
                                            <span class="form_span" onclick="Toggle()"><i class="fa fa-eye"></i></span>
                                        </div>

                                        <div class="form-group">
                                            <div class="staff_type text-black mb-1">
                                                <input class="text-white bg-white" name="log_staff" type="radio" value="admin"><text>Admin</text>
                                                <input class="text-white bg-white" name="log_staff" type="radio" value="manager"><text>Manager</text>
                                                <input class="text-white bg-white" name="log_staff" type="radio" value="staff"><text>Staff</text>
                                            </div>
                                            
                                        </div>
                                        <div class="text-center mt-4 mb-2">
                                            <button type="submit" name="log_check" class="btn btn-primary btn-block">Log In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/deznav-init.js"></script>
<script type="text/javascript">
    function Toggle() {
        var temp = document.getElementById("typePass");
        if (temp.type === "password"){
            temp.type = "text";
        }
        else{
            temp.type = "password";
        }
    }
</script>
</body>
</html>
<?php 

if(isset($_POST['log_check'])){
      // username and password sent from form 
      
    $log_name = mysqli_real_escape_string($conn, $_POST['log_user']);
    $log_pass = $_POST['log_pass'];
    $log_type = $_POST['log_staff'];

    $check_member = mysqli_query($conn, "SELECT * FROM restro_member WHERE member_name = '$log_name' 
    AND member_pass = '$log_pass' AND member_type = '$log_type'");
    print_r($check_member);
    $row = mysqli_fetch_array($check_member,MYSQLI_ASSOC);

    $count = mysqli_num_rows($check_member);
    if($count == 1){
        
        $_SESSION['log_name'] = $log_name;
        $_SESSION['log_type'] = $log_type;
        if ($_SESSION['log_type'] == "admin" || $_SESSION['log_type'] == "manager"){
            echo '<script>window.location.href="admin-panel.php";</script>';
        }
        elseif ($_SESSION['log_type'] == "staff" ){
            echo '<script>window.location.href="new-order.php";</script>';
        }
        else{
            echo '<script>window.location.href="new-order.php";</script>';
        }
    }  
    else{
        echo '<script>alert("Wrong User or Pass! \n\n Try again.")</script>';
    }
}

?>