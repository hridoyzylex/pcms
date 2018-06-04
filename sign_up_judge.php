<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<link rel="stylesheet" href="css/prime.css" type="text/css" media="all">
<link rel="stylesheet" href="css/sign_up_judge.css" type="text/css" media="all">


<body background= "images/background.jpg">
<img src="images/logo.jpg" alt="NSUPC" style="width:250px;height:auto; margin-left: 40%;">

<div class="testbox">


  <h1><b>Sign Up as a Judge</b></h1>

  <form name="judge_registration" method="post" action="save_judge.php">
    <hr>
        <div class="accounttype">
                		    			    
			    <input type="text" name="name" id="name" placeholder="Name" required/>
                
                <input type="text" name="about_me" id="name" placeholder="About Me" required/>
                
                <input type="text" name="dob" id="name" placeholder="Date of Birth" required/>
				 
				<input type="text" name="contact_no" id="name" placeholder="Contact Number" required/>
				
				<input type="text" name="email" id="name" placeholder="Email" required/>
				 
				<input type="text" name="address" id="name" placeholder="Address" required/>
				
                <input type="text" name="username" id="name" placeholder="Username" required/>
			    
                <input type="password" name="password" id="name" placeholder="Password" required/>
                
                <input type="password" name="c_password" id="name" placeholder="Confirm Password" required/>
				
				
    	</div>
    	</br>
	<input type='submit' class="button" value='Submit' style="margin-left: 35%"/>
	<input type="button" value="Cancel" onClick="document.location.href='sign_up.php';"/>
   
  </form>

</div>
</body>
</html>