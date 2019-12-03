<?php
	
	// session_start();

   	require 'session.php';

   	$session = new Session();

	if(isset($_POST['user_token']) && $_POST['user_token']==$session->get('token')){
		
		if($_POST['username']=='admin' && $_POST['password']=='123456'){
			echo "Success Login";
		}else{
			echo "Invalid Username and password";
			$session->destroy();
			header('Location: ../index.html');
		}

	}else{
		echo "Inactivated CSRF Token";
		$session->destroy();
		header('Location: ../index.html');
	}
?>