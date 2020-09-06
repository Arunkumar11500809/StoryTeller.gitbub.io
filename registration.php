<?php
session_start();
header('location:index.php');

$con = mysqli_connect('localhost','root');
if($con)
{
	echo "connection successfull";
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
	echo " Already present";
}
else
{
	$qy="insert into signin(name,password) values ('$name','$pass')";
	mysqli_query($con,$qy);
}
?>