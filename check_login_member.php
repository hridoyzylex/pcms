<?php
	include_once "connection.php";
	
	// username and password sent from form
	$myusername=$_POST['username'];
	$mypassword=$_POST['password']; 
	
	if(!mysqli_connect_errno())
	{
		$result = mysqli_query($con, "SELECT * FROM member WHERE username='$myusername' AND password='$mypassword' ");
		$row = mysqli_fetch_array($result);
		mysqli_close($con);
	}
	
	// Mysql_num_row is counting table row
	$count=mysqli_num_rows($result);
	echo $count;
	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1)
	{	session_start();
		$_SESSION['username'] = $row['username'];
		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
		header("location:login_success_member.php");
	}
	else 
	{
		header("location:sign_in_unsuccessful.php");
	}
?>