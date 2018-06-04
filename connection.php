<?php
	$db['hostname'] = "localhost";
	$db['username'] = "root";
	$db['password'] = "";
	$db['database'] = "pcms";
	
	$con = mysqli_connect($db['hostname'] = "localhost",$db['username'] = "root",$db['password'] = "",$db['database'] = "pcms");
	
	if(mysqli_connect_error())
	{
		echo "Failed to connect to MySQL: ". mysqli_connect_error();
	}
		
?>