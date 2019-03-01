$client = new rabbitMQClient("testRabbitMQ.ini","testServer");
if (isset($argv[1]))
{
  $msg = $argv[1];
}
else
{
  $msg = "test message";
}
#$user = "test";
#$pass = "12345678";
#
$user = $_POST["user"];
$pass = $_POST["pass"];
$request = array();
$request['type'] = "login";
$request['user'] = $user;
$request['pass'] = $pass;
$request['message'] = $msg;
$response = $client->send_request($request);
#return $response; 
echo $argv[0]." END".PHP_EOL;
if($response == 1 ) {
#for session	$_SESSION["user"] = $_POST["user"];
	header("Location:mainpage.html");
}else{
	header("Location:wronguser.html");
}
?>
