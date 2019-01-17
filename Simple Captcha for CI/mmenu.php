<?php 
function generatecapta(){
	$chart = str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ');
	$captcha = substr($chart, 0, 5);
	return $captcha;
}

?>