<?php
require('rabbitFiles/loginRBMQ.php'); #log in client functions

$userName = $_POST['uname'];
$pass= $_POST['pword'];
$response = login($userName,$pass);

if($response != false){ # you have loggin in
	$sessionData = json_decode($response, true); #get data from rabbitmq
	$_SESSION['username']=$sessionData['username'];
	$_SESSION['firstname']=$sessionData['firstname'];
}
else {
	#handle error
	$errorMsg = 'login failed!';
	echo "<p>$errorMsg</p>";
	
}
?>
