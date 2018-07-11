<?php
setcookie("user","cetpa",time()+1800);
?>
<!doctype html>
<html>
<body>
<?php
$u=$_COOKIE["user"];
echo $u;
?>
</body>
</html>