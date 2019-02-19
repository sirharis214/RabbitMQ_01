<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST'){
	if (isset($_POST['login'])){
		require 'requestFiles/loginRequest.php';
	}
	if (isset($_POST['register'])){
		require 'requestFiles/register.Request.php';
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Haris Sample</title>
</head>
<body style="padding-top:70px">
<h1>Log in Please </h1>

<!--Start form-->
<form class="form-signin" action = "index.php" method = "POST">
	<input type="text" name="uname" id="inputUser" class="form-control" placeholder="User Name" required>
	<label for ="inputUser">Username</label>
	<br><br>
	<input type="password" name="pword" id="inputPassword" class="form-control" required>
	<label for="inputPassword">Password</label>

	<button name='login' type="submit">Sign in</button>
</form>
	<br>


</body>
</html>
