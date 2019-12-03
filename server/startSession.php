<?php

	ob_start();
   	// session_start();

   	require_once 'session.php';

   	$session = new Session();

	function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	$user_token=generateRandomString(16);
	$session->vars['token'] = $user_token; 

	// $_SESSION["token"] = $user_token;

	print_r($user_token);
?>