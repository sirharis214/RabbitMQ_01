<?php
ini_set("display_errors", 1);
ini_set("log_errors",1);
ini_set("error_log", "/var/logs/apache2/error.log");
error_reporting( E_ALL & ~E_DEPRECATED & ~E_STRICT);
include('Client.php');
$user = $_POST['user'];
$pass = $_POST['pass'];
$response = authentication($user, $pass);
if($response == false){
	echo "\n Login Unsuccessful...Redirecting";
	header("Refresh:3; url=login.html");  
}else{
	echo "\n Login Successful...Redirecting<br>"; 
	header("Refresh:3; url=mainpage.html"); 
 
} 
?>
