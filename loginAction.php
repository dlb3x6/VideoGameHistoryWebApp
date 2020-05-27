<?php

	if(!session_start()) {
		$error = "Uh oh";
		exit;
	}
	
	$loggedIn = empty($_SESSION['loggedIn']) ? false : $_SESSION['loggedIn'];
	
	if ($loggedIn) {
		header("Location: index.php");
		exit;
	}
	
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'doLogin') {
		handleLogin();
	} else {
		loginForm();
	}
	
	function handleLogin() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
	
		if ($username == "test" && $password == "pass") {
			
			$_SESSION['loggedIn'] = $username;
			header("Location: index.php");
			exit;
		} 
        
        else {
			$error = 'Error: Incorrect username or password';
			require "login.php";
		}
        
	}
	
	function loginForm() {
		$username = "";
		$error = "";
		require "login.php";
	}
	
	
?>