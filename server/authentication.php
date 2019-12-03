<?php
	
	// session_start();

   	require 'session.php';

   	$session = new Session();

   	$userToken = filter_input(INPUT_POST, 'user_token', FILTER_SANITIZE_SPECIAL_CHARS);
   	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
   	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

   	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "myDB";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}


	if(isset($userToken) && $userToken==$session->vars['token']){
		
		$sql = 'SELECT * FROM Users WHERE Name ="' + $username + '" AND Pass ="' + $password + '"';
		$result = $conn->query($sql);


	}else{
		print_r("Inactivated CSRF Token");
		$session->destroy();
		header('Location: ../index.html');
	}
?>