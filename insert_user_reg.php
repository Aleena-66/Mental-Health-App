<?php
$con=mysqli_connect("localhost","root","","mental_health");
$email=$_GET['email'];
$gender=$_GET['gender'];

$name=$_GET['name'];
$age=$_GET['age'];
$password=$_GET['password'];


$response=array();
$sql="insert into registration(email,gender,name,age,password) values('$email','$gender','$name','$age','$password')";

$result=mysqli_query($con,$sql);
	$response['success']=true;

		mysqli_close($con);
echo json_encode($response)

?>