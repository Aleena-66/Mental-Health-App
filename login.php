<?php
$con=mysqli_connect("localhost","root","","fitness");
$email=$_GET['email'];
$password=$_GET['password'];

$response=array();
$check="SELECT * from registration where email='$email' AND password='$password'";

$result=mysqli_query($con,$check);
if (mysqli_num_rows($result)>0)
	{
		$response['success']=true;
		$row=mysqli_fetch_assoc($result);
		
		$response['data'][]=$row;
		
	}
	else
	{
		$response['success']=false;
	}
	
		echo json_encode($response);
		mysqli_close($con);
?>