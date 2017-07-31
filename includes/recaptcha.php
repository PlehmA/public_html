<?php 
if (isset($_POST["g-recaptcha-response"])&& $_POST["g-recaptcha-response"]) 
{
	$secret="6LczdxQUAAAAAMcATH6SmljuKhYFvSwLUBJxWVSf";
	$ip = $_SERVER["REMOTE_ADDR"];
	$captcha = $_POST["g-recaptcha-response"];
	$result = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
	echo "<br>";
	$array = json_decode($result,true);
	if ($array["success"]) 
	{
	
	}else {
		echo "Eres un robot";
	}
}
 ?>