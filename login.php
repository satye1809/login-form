<?php
if(!isset($_COOKIE["id"])){
	header("location:inout.php");
}
$con = mysqli_connect("localhost","root","","login");
$n=$_REQUEST["email"];
$p=$_REQUEST["pwd"];
$sql="select * from user where email='$n' and password='$p'";
$r=mysqli_query($con,$sql);
$count=mysqli_num_rows($r);

//if($n=="cetpa@gmail.com" && $p=="cetpa123")
	if($count>0)
{
setcookie("id",$n,time()+1800);
header("location:account.php");
}
?>