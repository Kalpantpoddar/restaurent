<?php 
session_start();
$rand_num = rand(111111,999999);
$_SESSION['CODE'] = $rand_num;
$layer = @imagecreatetruecolor(90, 30);
$captcha_bg = imagecolorallocate($layer, 72, 71, 200);
imagefill($layer, 0, 0, $captcha_bg);

$captcha_txt_color = imagecolorallocate($layer,255,255,255);
imagestring($layer, 10, 20, 7, $rand_num, $captcha_txt_color);
header('Content-Type:image/jpeg');
imagejpeg($layer);


?>
<script>
function submit_captcha(){

var captcha_code = document.getElementById("captcha_txt").value;
$.ajax({
	url: "captcha-check.php",
	type: "POST",
	async:true,
	data: {captcha_code: captcha_code},
	success: function(data){
		if(data=="success"){
            window.location="https://..Main/index.html";
        }
        else{
        	alert('Please Enter Valid Captcha Code.');
        }
	}
});
}
</script>