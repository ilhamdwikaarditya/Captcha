<?php
session_start();
header('Content-type: image/png');

$chart = str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ');
$captcha = substr($chart, 0, 5);
# simpan captcha di dalam session
$_SESSION['captcha'] = $captcha;
# imagecreate(P, L)
$image = imagecreate(65, 30);
$background = imagecolorallocate($image, 255, 255, 255);
$text = imagecolorallocate($image, 0, 0, 0);

imagefilledrectangle($image, 0, 0, 65, 30, $background);
imagestring($image, 20, 10, 7, $captcha, $text);
imagejpeg($image);
imagedestroy($image);

?>