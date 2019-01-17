<?php
session_start();
$captcha = $_POST['captcha'];

if(!empty($captcha)){

	if ($captcha == $_SESSION['captcha']) {
		$response = array(
			'error'=>false,
			'message'=>'Captcha true'
		);
	}else{
		$response = array(
			'error'=>false,
			'message'=>'Captcha false'
		);
	}
}else{
	$response = array(
		'error'=>false,
		'message'=>'Please enter captcha'
	);
}

echo json_encode($response);
?>