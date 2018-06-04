<!doctype html>
<html>

 <head> 
 	<link rel="stylesheet" type="text/css" href="css/account.css">
	 <title>My Account</title>
 </head> 
 
<body>
<img src="images/logo.jpg" alt="NSUPC" style="width:250px;height:auto; margin-left: 40%;">

<?php 
	session_start();
	include "connection.php";
	if(!mysqli_connect_errno())
	{
		$user_result = mysqli_query($con, "SELECT * FROM member WHERE username = '$_SESSION[username]'");
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

<div class=container>	
	
	<img class  = "right" src="images\hasanat.jpg" alt="Upload Photo" style="width:170px;height:160px">
	<form>
	<table style="color: black">
		<tr>
			<td> Name:</td>
			<td> <?php echo $row["name"]; ?> </td>
		</tr>
		<tr>
			<td> About Me:</td>
			<td> <?php echo $row["about_me"]; ?> </td>
		</tr>
		<tr>
			<td> NSU ID:</td>
			<td> <?php echo $row["nsu_id"]; ?> </td>
		</tr>
		<tr>
			<td> Date of Birth:</td>
			<td> <?php echo $row["dob"]; ?> </td>
		</tr>
		<tr>
			<td> Contact Number:</td>
			<td> <?php echo $row["contact_no"]; ?> </td>
		</tr>
		<tr>
			<td> Email:</td>
			<td> <?php echo $row["email"]; ?> </td>
		</tr>
		<tr>
			<td> Address:</td>
			<td> <?php echo $row["address"]; ?> </td>
		</tr>	
	</table>
	</form>
</div>
</body>

</html>