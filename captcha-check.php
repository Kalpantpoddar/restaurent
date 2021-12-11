<?php
include'config.php';
include'function.php';

session_start();
$captchaCode = $_POST['captcha_code'];

if ($_SESSION['CODE'] == $captchaCode) {

	echo "success";

}
else{
	echo "unsuccess";
}

?>