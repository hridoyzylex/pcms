<!DOCTYPE HTML>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/log_in.css">
</head>

<body background= "images/background.jpg">
<img src="images/logo.jpg" alt="NSUPC" style="width:250px;height:auto; margin-left: 40%;">

<div class=container>
	<br>
	<br>
	
	<h1>Welcome To NSU Photography Club</h1>
	
	<h2 style="color: orange"> Sign In As a Judge</h2>
	</br>
	</br>
	</br>
    <form name = "log_in" method = "post"  action = "check_login_judge.php">
	<table>
	<tr>
		<td style="font-size: 20px; color: white"><b>User Name:</b></td>
		<td><input type="text" name="username" id="username" size="40" required="required"></td>
	</tr>
	<tr>
		<td style="font-size: 20px; color: white"><b>Password:</b></td>
		<td><input type="password" name="password" id="password" size="40" required="required"></td>
	</tr>
	<tr>
		<td class = "hel"><input type = "submit" name = "submit" value = "Sign In"></td>
		<td class = "hel"><input type = "submit" name = "cancel" value = "Cancel" onClick="document.location.href='sign_in.php';" style="margin-left: 30%"></td>
	</tr>
</table>
</form>

</div>

</body>
</html>