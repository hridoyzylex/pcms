<?php
    ini_set('mysql.connect_timeout',300);
    ini_set('default_socket_timeout',300);
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/Administration.css">
    <link rel="stylesheet" href="css/prime.css" type="text/css" media="all">
</head>

<body background= "images/background.jpg">
    <img src="images/logo.jpg" alt="NSUPC" style="width:250px;height:auto; margin-left: 40%;">
    
    <?php 
    include_once "includes/menu_home.php";
    ?>

        <h1 style="text-align: center; color:orange"> .: Gallery :. </h1>
        
        <?php
            if(isset($_POST['sumit']))
            {
                if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
                {
                    echo "Please select an image.";
                }
                else
                {
                    $image= addslashes($_FILES['image']['tmp_name']);
                    $name= addslashes($_FILES['image']['name']);
                    $image= file_get_contents($image);
                    $image= base64_encode($image);
                    saveimage($name,$image);
                }
            }
            displayimage();
            function saveimage($name,$image)
            {
                $con=mysql_connect("localhost","root","");
                mysql_select_db("pcms",$con);
                $qry="insert into images (name,image) values ('$name','$image')";
                $result=mysql_query($qry,$con);
                if($result)
                {
                    //echo "<br/>Image uploaded.";
                }
                else
                {
                    //echo "<br/>Image not uploaded.";
                }
            }
            function displayimage()
            {
                $con=mysql_connect("localhost","root","");
                mysql_select_db("pcms",$con);
                $qry="select * from images";
                $result=mysql_query($qry,$con);
                while($row = mysql_fetch_array($result))
                {
                    echo '<img height="300" width="relative" src="data:image;base64,'.$row[2].' "> ';
                }
                mysql_close($con);   
            }
        ?>
    </br>
    </br>
    </br>
    </br>
    </br>
    <?php 
    include_once "footer.php";
    ?>
    </body>
</html>