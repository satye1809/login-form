<?php
setcookie("user","",time()-1);//to expire cookie set cookie timing in past
$u=$_COOKIE["user"];//to fetch the cookie
echo $u;//first request me undefined,dusri baar me aega
?>