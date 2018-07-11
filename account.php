<?php
if(!isset($_COOKIE["id"]))
{
	header("location:inout.php");
	}
$n=$_COOKIE["id"];
	echo "welcome=".$n;
?>
<a href="logout.php">Logout</a>