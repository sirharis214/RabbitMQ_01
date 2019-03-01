<?php
	session_start();
	$servername = "testServer";
	$username = "test";
	$password = "12345678";
	$dbname = "test";
	// Create connection
	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error)
		{
		die("Connection failed: " . $conn->connect_error);
		} 
	echo "Connected successfully";
	// select database
	$db_selected = mysql_select_db('foo', $conn);
	if (!$db_selected)
	{
		die ('Can\'t use foo : ' . mysql_error());
	}
?>
