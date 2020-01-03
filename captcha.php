<?php
$str = md5(microtime());
$str = substr($str,0,6);
session_start();
$_SESSION['cap_code'] = $str;
$img = imagecreate(100,24);
imagecolorallocate($img,255,255,255);
$txtcol = imagecolorallocate($img,0,0,0);
imagestring($img,20,5,5,$str,$txtcol);
header('content:image/jpeg');
$captcha = imagejpeg($img);
?>