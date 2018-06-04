<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/Administration.css">
    <link rel="stylesheet" href="css/prime.css" type="text/css" media="all">
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

    <script type="text/javascript">
    jQuery(document).ready(function() {
    jQuery(".content").hide();
    
    jQuery(".heading").click(function()
    {
      jQuery(this).next(".content").slideToggle(500);
    });
    });
</script>
</head>

<body background= "images/background.jpg">
<img src="images/logo.jpg" alt="NSUPC" style="width:250px;height:auto; margin-left: 40%;">

<?php 
	include_once "includes/menu_home.php";
?>

<div style="margin-left: 13%">
<h2 style="text-align:center; color: orange">.: Notices :.</h2>


<div class="layer1">
<p class="heading", style="color: blue; font-size: 130%">(08.08.2015) General Body Meeting</p>
<div class="content", style="margin-left: 5%; color: white">General Body Meeting on (10.08.2015) Thursday.</div>

<p class="heading", style="color: blue; font-size: 130%">(28.07.2015) IIUPE 2015</p>
<div class="content", style="margin-left: 5%; color: white">

INAUGURATION & AWARD GIVING CEREMONY 29th August, 2015 <br> National Art Gallery Auditorium,<br>Shilpakala Academy
</div>

<p class="heading", style="color: blue; font-size: 130%">(07.06.2015) Roles of new In-Charges</p>
<div class="content", style="margin-left: 5%; color: white">They will make arrangements of upcoming events and conduct workshops</div>

<p class="heading", style="color: blue; font-size: 130%">(15.05.2015) Summer Recruitments</p>
<div class="content", style="margin-left: 5%; color: white">North South University Photography Club (NSUAPC) <br>Recruitment 152 booth is resuming from 18th June, 2015.<br> 
Every member needs to show up in the club to discuss about the matter and come up with an innovative idea to seek eveyones attension.</div>

<p class="heading", style="color: blue; font-size: 130%">(09.04.2015) New EB Panel</p>
<div class="content", style="margin-left: 5%; color: white">As all of you already know that 2014-15 session is over and that means our "EB-ship" is over. Although I am teary eyed while writting this </br>
but on the other hand I am happy to say that New and very well-deserved guys/girls will take this new responsibilities. Do come on 12th April, 2015 </br>
to say us good bye and welcome the new EB-Panel.</div>

<p class="heading", style="color: blue; font-size: 130%">(07.03.2015) Club Room Decoration</p>
<div class="content", style="margin-left: 5%; color: white">In last couple of semesters we haven't done anything for our very own club. We need some refurbishment. We will be talking about </br>
our club room amusements like music system and other stuffs. Room decoration plans will also be made. Please pay a visit and share </br>
your thoughts on 10th March, 2015. </div>

<p class="heading", style="color: blue; font-size: 130%">(04.02.2015) Executive Body Meeting</p>
<div class="content", style="margin-left: 5%; color: white">Executive body meeting will be held on 5th February, 2015.  Every EB members are requested to attend the meeting. </br>
We will talk about things that we need to do in our near future.</div>


</div>
</div>

</br>
</br>
</br>

<?php 
	include_once "footer.php";
?>

</body>
</html>