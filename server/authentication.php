<?php
	
	session_start();

	if(isset($_POST['user_token']) && $_POST['user_token']==$_SESSION["token"]){
		
		if($_POST['username']=='admin' && $_POST['password']=='123456'){
			echo "Success Login";
		}else{
			echo "Invalid Username and password";
			session_destroy();
			header('Location: ../index.html');
		}

	}else{
		echo "Inactivated CSRF Token";
		session_destroy();
		header('Location: ../index.html');
	}
?>