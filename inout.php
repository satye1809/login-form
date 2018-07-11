<?php
if(isset($_COOKIE["id"]))
{
	header("location:account.php");
}
?>
<!doctype html>
<html>
<head>
</head>
<body>
<form action="login.php">
Email:<input type="text" name="email">
Password:<input type="password" name="pwd">
<input type="submit" value="login">
</form>
</body>
</html>