<?php
require('config.php');


require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{

    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $name = $_SESSION['customer_name'];
    $phone = $_SESSION['customer_phone'];
    $email = $_SESSION['email'];
    $price = $_SESSION['sum_amount'];
    $order_date = $_SESSION['order_date'];
    $order_type = $_SESSION['order_type'];

    $sql = "INSERT INTO pay_orders( `order_id`, `razorpay_payment_id`, `status`, `name`, `phone`, `price`, `order_date`) VALUES ('$razorpay_order_id','$razorpay_payment_id','success','$name', '$phone','$price', '$order_date')";
    if (mysqli_query($conn, $sql)){
        echo '<script>alert("Data inserted.")</script>';
    }

    // $html = "<h3>Mr./Mrs. {$name}</h3>
    //         <p>Your payment was successful</p>
    //          <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
if ($order_type == 'pickup'){
    header('location:../delivery-order-print.php');
}
elseif($order_type == 'dine_in'){
    header('location:../order-print.php');
}

?>
<a href="../new-order.php">Home Page.</a>
