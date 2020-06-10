<?php
	require_once('../model/database.php');
	require_once('../model/teacher_db.php');
	require_once('../model/helpdesk_db.php');
	session_start();
	if(isset($_POST['action']))
	{
		// get the values
		$username = $_POST['username'];
		$password = $_POST['password'];

		// check login
		if(is_valid_teacher_login($username, $password)) {
			$_SESSION['teacher'] = $username;
			header('Location: ../teacher/index.php');
		} elseif(is_valid_helpdesk_login($username, $password)) {
			$_SESSION['helpdesk'] = $username;
			header('Location: ../teacher/helpDesk.php');
		} else {
			$error_message =  "Login Failed. Invalid Email or Password";
			echo $error_message;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login form Design</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="loginbox">
	<img src="login.png" class="avatar">
	<h1>Login</h1>
	<form action="" method="POST">
		<p>username</p>
		<input type="text" name="username" placeholder="Enter username">
				<p>password</p>
		<input type="password" name="password" placeholder="Enter password">
		<input type="submit" value="submit" name="action">
		<a href="signup.php">Sign Up</a>
	</form>
	</div>
</body>
</html>
