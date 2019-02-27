<?php
	$serverame = "Localhost";
	$username = "root";
	$password = "password";
	$dbname = "darpanDB";

	$conn = mysqli_connect($servername, $username , $password , $dbname);
	if($conn)
	{
		echo "connection OK";
	}
	else
	{
		echo "connection failed";
	}
?>	
