#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

function doLogin($username,$password)
{
	$host = '127.0.0.1';
	$user = 'test';
	$pass   = '12345678';
	$db = 'test';

	
	$mysqli = new mysqli($host,$user,$pass,$db)
	if ($mysqli->connect_error)
	{
		echo "Database Connect Error";
		die('Connect Error');
	}

	//lookup username in database
	$query = "SELECT * FROM testTable WHERE username = '$test' and password = '$pass';";
	$response = $mysqli->query($query);	
	
	// check password
	while($row = $response->fetch_assoc())
	{
		if ($row["password"] == $pass)
		{
			echo "passwords match for $username".PHP_EOL;
			return true;
		}
	}
	#return true;
	
	//return false if not valid
	return false
}

function requestProcessor($request)
{
  echo "received request".PHP_EOL;
  var_dump($request);
  if(!isset($request['type']))
  {
    return "ERROR: unsupported message type";
  }
  switch ($request['type'])
  {
    case "login":
      return doLogin($request['username'],$request['password']);
    case "validate_session":
      return doValidate($request['sessionId']);
  }
  return array("returnCode" => '0', 'message'=>"Server received request and processed");
}

$server = new rabbitMQServer("testRabbitMQ.ini","testServer");

echo "testRabbitMQServer BEGIN".PHP_EOL;
$server->process_requests('requestProcessor');
echo "testRabbitMQServer END".PHP_EOL;
exit();
?>

