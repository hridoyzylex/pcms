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
		include_once "includes/menu_profile_judge.php";
	}
?>

<div class=container>
	<?php 
		include "connection.php";
		if(!mysqli_connect_errno())
		{
			$result = mysqli_query($con, "SELECT * FROM judge WHERE username = '$_SESSION[username]'");
			$row = mysqli_fetch_array($result);
			mysqli_close($con);
		}
		
		$count=mysqli_num_rows($result);
		if($count == 0)
		{
			echo "ERROR OCURRED !!!";
		}
	?>	
	
	<img class  = "right" src="images\placeholder.jpg" alt="Upload Photo" style="width:170px;height:160px">
	<form name = "edit_account" method = "post"  action = "save_account_judge.php">
	<table style="color: black">
		<tr>
			<td> Name:</td>
			<td><input type = "text" name = "name" id = "name" size = "40" required = "required" value = "<?php echo $row["name"]; ?>"></td>
		</tr>
		<tr>
			<td> About Me:</td>
			<td><input type = "text" name = "about_me" id = "about_me" size = "40" required = "required" value = "<?php echo $row["about_me"]; ?>"></td>
		</tr>
		<tr>
			<td> Date of Birth:</td>
			<td ><input type = "date" name = "dob" id = "dob" size = "40" required = "required"  value = "<?php echo $row["dob"]; ?>"></td></td>
		</tr>
		<tr>
			<td> Contact No:</td>
			<td><input type = "text" name = "contact_no" id = "contact_no" size = "40" required = "required" value = "<?php echo $row["contact_no"]; ?>"></td>
		</tr>
		<tr>
			<td> Email: </td>
			<td><input type = "text" name = "email" id = "email" size = "40" required = "required" value = "<?php echo $row["email"]; ?>"></td>
		</tr>
		<tr>
			<td> Address </td>
			<td><input type = "text" name = "address" id = "address" size = "40" required = "required" value = "<?php echo $row["address"]; ?>"></td>
		</tr>
		<tr>
			<td> Username:</td>
			<td><input type = "text" name = "username" id = "username" size = "40" required = "required" value = "<?php echo $row["username"]; ?>"></td>
		</tr>	
		<tr>
			<td class = "hel"><input type = "submit" name = "submit" value = "Save"></td>
		</tr>
	</table>
	</form>
</div>
</body>

</html>