
<link rel="stylesheet" type="text/css" href="css/account.css">

<?php
	include_once "includes/menu_profile_member.php";
	include_once "connection.php";
	session_start();

	
	$sql = "UPDATE member
		SET name = '$_POST[name]',about_me = '$_POST[about_me]',nsu_id = '$_POST[nsu_id]',dob = '$_POST[dob]',contact_no = '$_POST[contact_no]',email = '$_POST[email]',address = '$_POST[address]',username = '$_POST[username]'
		WHERE username = '$_SESSION[username]'";

	if(mysqli_query($con,$sql))
	{
?>
	<div>
	</br>
	</br>
		<h1 align = "center">Information Changed Successfully!!!</h1>
	</div>
<?php
	}
	else
	{
		echo "Error: ".$sql."<br>".mysqli_error($con);
	}
		
	mysqli_close($con);
?>