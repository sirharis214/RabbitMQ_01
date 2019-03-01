#!/usr/bin/php
<?php
require_once ('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

function loginUser(#username, $pass){
	//set up database
	$host = 'localhost';
	$user = 'admin';
	$pw = 'password';
	$db = 'test';	
	$mysqli = new mysqli($host, $user, $pw, $db);
	if ($mysqli->connect_error){
		echo "DB connect Error".PHP_EOL;
		die('Connect error,'.$mysqli->connect_errno.':'.mysqli->connect_error);
	}
	$userData = array();
	$un = $mysqli->escape_string($username);
	$pass = $mysqli->escape_string($pass);
	$query = "SELECT * FROM testTable WHERE username = '$un' AND password = '$pass'";
	$response = $mysqli->query($query);
	
}
$server = new rabbitMQServer("testRabbitMQ.ini","testServer");
echo"Login Begin".PHP_EOL;
$server->process_requests('requestProceeor');
echo"login End".PHP.EOL;
exit();
?>
