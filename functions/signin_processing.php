<?php
if (isset($_POST['submit'])) {
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST["password"];
	$confirm = $_POST['confirm'];
	// $agree = filter_input(INPUT_POST, 'agree', FILTER_SANITIZE_STRING);
	$agree = $_POST['agree'];


	// echo $username, $email, $password, $confirm;

	echo $agree;

}
	