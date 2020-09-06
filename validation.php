<?php
session_start();
$_SESSION['message']="";


$con = mysqli_connect('localhost','root');
if($con)
{
	echo"connection successfull";
}
else
{
	echo "connection lost";
}

mysqli_select_db($con,'sessionpractical');

$name=$_POST['user'];
$pass=$_POST['password'];

$q="select * from signin where name='$name' && password='$pass'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num== 1)
{
	$_SESSION['username']=$name;
	header('location:home.php');
	
}
else
{
	header('location:index.php');
	$_SESSION['message']="Account not found";
}

?>