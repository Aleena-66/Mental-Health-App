<?php
error_reporting(0);
session_start();
?>


<html>
<head>
 <meta name="viewport" content="width=device-width" content="initial-scale=1">
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/log.css" rel="stylesheet">
</head>
<body>
  <div id="p3">

  <div class="row-justify-content-center">
  <div class="col-sm-12" style='background-color:#ffffff; margin-top:250px;'>
  <h3>RESULT</h3>
  <?php
$a=0;$b=0;$c=0;$d=0;
  $check="SELECT * from answer where mid='1'and answer='1'";

$result=mysqli_query($con,$check);

		while($row=mysqli_fetch_array($result))
		{
			  $check2="SELECT * from question where id='$row[question_id]'";
			$result2=mysqli_query($con,$check2);

			$row2=mysqli_fetch_array($result2);

				$a=$a+$row2['reading'];
				$b=$b+$row2['music'];
				$c=$c+$row2['painting'];
				$d=$d+$row2['dance'];
		
		}
		echo"<div class='alert alert-warning' >";
		
if($_REQUEST['type']=="Reading")
{
			echo"<h3>READING</h3><br>";
			echo"<p>Score $a</p>";
}
if($_REQUEST['type']=="Musics")
{
			
			echo"<h3>MUSIC</h3><br>";
			echo"<p>Score $b</p>";
}
if($_REQUEST['type']=="Painting")
{
	
			echo"<h3>PAINTING</h3><br>";
			echo"<p>Score $c</p>";
}
if($_REQUEST['type']=="Dance")
{
	
			echo"<h3>DANCE</h3><br>";
			echo"<p>Score $d</p>";
}

			echo"</div>";


echo"<h3>RECOMENDATION</h3>";

 include('connectionI.php');
  if($_REQUEST['type']=="Reading")
{

echo"<h5>Reading</h5>";
 
  $check="SELECT * from data where type='Reading'  and score<='$a'";

$result=mysqli_query($con,$check);
if (mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{
			?>
			  <div class="alert alert-warning" >
			<?php
			echo"<h3>$row[title]</h3><br>";
			echo"<p>$row[description]</p>";
			echo"<iframe width='80%' height='250px' src='$row[link]'  frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
			
			echo"</div>";
		}
		
	}
	else
	{
		echo"<h3>No Data</h3>";
	}
  }

if($_REQUEST['type']=="Music")
{
  
echo"<h5>Music</h5>";
 
  $check="SELECT * from data where type='Music'  and score<='$b'";

$result=mysqli_query($con,$check);
if (mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{
			?>
			  <div class="alert alert-warning" >
			<?php
			echo"<h3>$row[title]</h3><br>";
			echo"<p>$row[description]</p>";
			echo"<iframe width='80%' height='250px' src='$row[link]'  frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
			
			echo"</div>";
		}
		
	}
	else
	{
		echo"<h3>No Data</h3>";
	}

}
if($_REQUEST['type']=="Painting")
{

echo"<h5>Painting</h5>";
 
  $check="SELECT * from data where type='Painting'  and score<='$c'";

$result=mysqli_query($con,$check);
if (mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{
			?>
			  <div class="alert alert-warning" >
			<?php
			echo"<h3>$row[title]</h3><br>";
			echo"<p>$row[description]</p>";
			echo"<iframe width='80%' height='250px' src='$row[link]'  frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
			
			echo"</div>";
		}
		
	}
	else
	{
		echo"<h3>No Data</h3>";
	}

}
if($_REQUEST['type']=="Dance")
{

echo"<h5>Dance</h5>";
 
  $check="SELECT * from data where type='Dance'  and score<='$d'";

$result=mysqli_query($con,$check);
if (mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{
			?>
			  <div class="alert alert-warning" >
			<?php
			echo"<h3>$row[title]</h3><br>";
			echo"<p>$row[description]</p>";
			echo"<iframe width='80%' height='250px' src='$row[link]'  frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
			
			echo"</div>";
		}
		
	}
	else
	{
		echo"<h3>No Data</h3>";
	}

  }
  ?>
	
			

 <a href='dashboard.php?user_id=<?php echo $_SESSION['uid']; ?>' >Back</a>
   </div>
   </div>
   </div>
   </div>

</body>
</html>