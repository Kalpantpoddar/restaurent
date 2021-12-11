<?php include'config.php'; 
include'get_session_access.php';
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
                            <div class="col-xl-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="auth-form">
                                    <h4 class="text-center text-primary mb-4">Register your account</h4>
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="user_name" autocomplete="off">
                                            <label class="mb-1">Username</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" name="user_phone" class="form-control" autocomplete="off" maxlength="12">
                                            <label class="mb-1">Phone Number</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="user_pass" id="newPass" class="form-control" autocomplete="off" minlength="6" maxlength="20">
                                            <label class="mb-1">Password</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="conf_pass" id="confPass" class="form-control" autocomplete="off">
                                            <label class="mb-1">Confirm Password</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="registrationFormAlert" style="color:red;" id="CheckPasswordMatch"></div>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" name="sign_up" class="btn btn-primary btn-block">Sign Up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="login.php">Log in</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-md-7 col-sm-6 col-xs-12">
                                <div class="authincation_body">
                                    <img src="images/others/chef-bro.png" class="authincation_img1">
                                    <div class="authincation_overlay">
                                        <div class="overlay_content">
                                            <p>Become a part of our team and manage your restaurent fast and smoothly.</p>
                                            <h3>Join Encode Restro Team</h3>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<script src="vendor/global/global.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/deznav-init.js"></script>
<script type="text/javascript">
    // $(document).ready(function () {
    //    $("#confPass").keyup(checkPasswordMatch);
    //    checkPasswordMatch();
    // });
    // function checkPasswordMatch() {
    //     var password = $("#newPass").val();
    //     var confirmPassword = $("#confPass").val();
    //     if(password != confirmPassword){
    //         $("#CheckPasswordMatch").html("Passwords does not match!");
    //         $("#userSignup").attr("disabled", "disabled");
    //         return false;
    //     }
    //     else{
    //         $("#CheckPasswordMatch").html("Passwords match.");
    //         $("#userSignup").removeAttr("disabled");
    //         return true;
    //     }     
    // }
    
</script>
</body>
</html>
<?php 
if(isset($_POST['sign_up'])){
    $user_name = $_POST['user_name'];
    $user_phone = $_POST['user_phone'];
    $user_pass = $_POST['user_pass'];
    $conf_pass = $_POST['conf_pass'];

    if($user_pass == $conf_pass){
        $insrt_user = "INSERT INTO restro_member(admin_id, admin_name, admin_phone, admin_pass, admin_status) VALUES('', '$user_name', '$user_phone', '$user_pass', 'active')";

        echo $insrt_user;
        $run_user = mysqli_query($conn, $insrt_user);
        if ($run_user){
           echo '<script>alert("Data inserted successfully.")</script>';
           echo '<script>window.location.href="admin-panel.php";</script>';
        }
        else{
            echo '<script>alert("Oops! Data not inserted.")</script>';
        }   
    }
    else{
        echo '<script>alert("Oops! Confirm Password do not match.")</script>';
    }


    
    
}


?>