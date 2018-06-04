<?php 
	session_start();
	include "connection.php";
	if(!mysqli_connect_errno())
	{
		$user_result = mysqli_query($con, "SELECT * FROM judge WHERE username = '$_SESSION[username]'");
		$user_info = mysqli_fetch_array($user_result);
		mysqli_close($con);
	}
		
	$count=mysqli_num_rows($user_result);
	if($count == 0)
	{
		echo "ERROR OCURRED !!!";
	}
	else
	{		
		include_once "includes/menu_profile_member.php";	
	}
?>

<?php
	$row = $user_info;
?>


<!doctype html>
<html>

 <head> 
 <link rel="stylesheet" type="text/css" href="css/account.css">
 <title>My Account</title>
 </head> 
 
<body style="background-color: white ">
</br>
<img src="images/logo.jpg" alt="NSUPC" style="width:250px;height:100px;margin-left: 40%">
<div>	
	</br>
	<h1 style="text-align: center; color:orange"> Gallery </h1>
	</br>
	</br>
	</br>
	<img src="pics/j1.jpg" alt="Upload Photo" style="width:270px;height:260px; margin-left: 19%">
	<img src="pics/j2.jpg" alt="Upload Photo" style="width:270px;height:260px;">
	<img src="pics/j3.jpg" alt="Upload Photo" style="width:270px;height:260px;">
	<form>
	<table style="color: black">
			
	</table>
	</form>
</div>
</body>

</html>