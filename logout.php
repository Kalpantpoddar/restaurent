<?php 
session_start();
session_unset($_SESSION['log_type']);
session_destroy();

// if(isset($_COOKIE['$log_type'])):
//         setcookie('$log_type', '', time()-7000000, '/');
//     endif;

echo '<script> window.location.href = "login.php";</script>';

?>