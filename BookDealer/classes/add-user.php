<?php

if($_SERVER["REQUEST_METHOD"] == 'POST'){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$location = $_POST['location'];

	$sha1pass = sha1($password);

	require_once('Users.php');
	$newUser = new User;
	$newUser -> createUser($username, $sha1pass, $email, $location);

	//header("Location:../index.php");
}
else{
	//X, please make an error page error.php for when users try to sign up and some data is not entered correctly.
	header("Location:../error.php");
	die();
}

?>