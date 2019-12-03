<?php
	
	// session_start();

   	require 'session.php';

   	$session = new Session();

   	$userToken = filter_input(INPUT_POST, 'user_token', FILTER_SANITIZE_SPECIAL_CHARS);
   	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
   	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

	if(isset($userToken) && $userToken==$session->vars['token']){
		
		if($username=='admin' && $password=='123456'){
			print_r("Success Login");
		}else{
			print_r("Invalid Username and password");
			$session->destroy();
			header('Location: ../index.html');
		}

	}else{
		print_r("Inactivated CSRF Token");
		$session->destroy();
		header('Location: ../index.html');
	}
?>