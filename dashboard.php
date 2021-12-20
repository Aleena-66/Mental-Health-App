<?php
error_reporting(0);
session_start();
$_SESSION['uid']=$_REQUEST['user_id'];

?>


<html>
<head>
 <meta name="viewport" content="width=device-width" content="initial-scale=1">
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/log.css" rel="stylesheet">

<style type="text/css">
#wrap {
    width:100%;
}
#wrap:after {
    /* Prevent wrapper from shrinking height, 
    see http://www.positioniseverything.net/easyclearing.html */
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
#wrap .container {
    float: left;
    width:40%;
margin:10px;
}
</style>
</head>
<body>
  <div id="p3">
<br><br><br><br><br><br><br><br><br><br><br><br>
			<div id="wrap">


        <div class="container"> 


  <a class="btn btn-primary"  href="index.php?type=Reading">  
             
                                   
                                <h3 class="text-white"><br>Reading</h3>
                     
                                </a>
</div>
        <div class="container">


  <a class="btn btn-primary"   href="index.php?type=Music">  
             
                                   
                                <h3 class="text-white"><br>Music</h3>
                     
                                </a>
 </div>
        <div class="container"> 


  <a class="btn btn-primary"  href="index.php?type=Painting">  
             
                                   
                                <h3 class="text-white"><br>Painting</h3>
                     
                                </a>
</div>

<div class="container"> 


  <a class="btn btn-primary"  href="index.php?type=Dance">  
             
                                   
                                <h3 class="text-white"><br>Dance</h3>
                     
                                </a>
</div>
    </div>
   </div>
  
</body>
</html>