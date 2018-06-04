<?php 
	session_start();
	include_once "includes/menu_general.php";
?>



<link rel="stylesheet" type="text/css" href="css/menu_bar.css">

<?php

	include "connection.php";
	$sql = "INSERT INTO judge
		(name,about_me,dob,contact_no,email,address,username,password,c_password)
		VALUES('$_POST[name]','$_POST[about_me]','$_POST[dob]','$_POST[contact_no]','$_POST[email]','$_POST[address]','$_POST[username]','$_POST[password]','$_POST[c_password]')";

	if(mysqli_query($con,$sql))
	{
?>
	<div>
		<h1>"Signed Up Successfully"</h1>
	</div>
<?php
	}
	else
	{
		echo "Error: ".$sql."<br>".mysqli_error($con);
	}
		
	mysqli_close($con);
	header("location:sign_up_successful.php");
?>