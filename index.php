<?php
session_start();



include('connectionI.php');


if(isset($_POST['submit']))
{

  
  $check2="SELECT MAX(mid) as mid from answer ";

$result2=mysqli_query($con,$check2);
$row2=mysqli_fetch_array($result2);

$mid=$row2['mid']+1;

	for($j= 1; $j<$_POST['ii']; $j++)
	{
$x="q".$j;
$y="r".$j;


			$q=$_POST[$x];
			$r=$_POST[$y];
			$uid=$_SESSION['uid'];
		mysqli_query($con,"INSERT INTO answer(question_id, answer, user_id,mid) VALUES ('$q','$r','$uid','$mid')");


	}
header("location:result.php?mid=$mid&type=$_POST[type]");
}

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
  
  <?php
  

  
  $check="SELECT * from question  limit 0,10  ";

$result=mysqli_query($con,$check);
if (mysqli_num_rows($result)>0)
	{
$i=1;
 echo"<form action='' method='post'>";
		while($row=mysqli_fetch_array($result))
		{
			?>
			  <div class="well" >
			<?php
			echo"<b>$i)$row[question]</b><br>";

 echo"
 <input type = 'hidden' name = 'q$i' value='$row[id]'>
Answer <input type='radio' name='r$i' value='1'/> YES &nbsp; <input type='radio' name='r$i' value='0'/> NO ";
$i++;
}
			
			echo"</div>
<input type='hidden' name='ii' value='$i' />
<input type='hidden' name='type' value='$_REQUEST[type]' />
<input type='submit' name='submit' class='btn btn-success'>
";

echo"</form>";
		
		
	}
	else
	{
		echo"<h3>No Data</h3>";
	}
  
  
  
  ?>
	
			
 <a href='dashboard.php?user_id=<?php echo $_SESSION['uid']; ?>' >Back</a>
   </div>
   </div>
   </div>
   </div>

</body>
</html>