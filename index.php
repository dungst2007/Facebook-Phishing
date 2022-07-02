<?php
$user = $_SERVER['HTTP_USER_AGENT'];
$tenmaychu=explode(')',explode('(',$user)[1])[0];
file_put_contents("user-angent.txt",$tenmaychu);
header("Location: /index.html")
?>
