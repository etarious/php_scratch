<?php
if (isset($_POST['submit'])) {

	require_once("./db/db_conn.php");
	
	$username = trim($_POST['username']);
	$email = trim($_POST['email']);
	$tel = trim($_POST['tel']);
	$password = trim($_POST["password"]);
	$confirm = trim($_POST['confirm']);
	// $agree = filter_input(INPUT_POST, 'agree', FILTER_SANITIZE_STRING);
	// $agree = $_POST['agree'];

	$errors = [];

	// echo $username, $email, $password, $confirm;

	if (empty($username)) {
		$errors[] = "Please enter username!";
	}

	if (empty($email)) {
		$errors[] = "Please enter email!";
	}

	if (empty($tel)) {
		$errors[] = "Please enter Phone number!";
	}else{
		$reg = "/^[0-9]{10}+$/";

		if (is_numeric($tel)) {
			if (!preg_match($reg, $tel)) {
				$errors[] = "Invalid phone number!";
			}
		}else{
			$errors[] = "Phone number must be a number!";
		}
	}

	if (empty($password)) {
		$errors[] = "Please enter password!";
	}elseif (strlen($password) < 8) {
		$errors[] = "Password must be at least 8 characters!";
	}

	if (empty($confirm)) {
		$errors[] = "Confirm password is incorrect!";
	}elseif (strlen($confirm) < 8) {
		$errors[] = "Confirm password must be at least 8 characters!";
	}elseif ($password !== $confirm) {
		$errors[] = "Confirm password is incorrect!";
	}

	if (empty($errors)) {

		$username = mysqli_real_escape_string($conn, trim($_POST['username']));
		$email = mysqli_real_escape_string($conn, trim($_POST['email']));
		$tel = mysqli_real_escape_string($conn, trim($_POST['tel']));
		$password = mysqli_real_escape_string($conn, trim($_POST["password"]));

		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		require_once("./functions/user_functions.php");

		if (checkUsernameExists($username)) {
			// Username already exists...
			echo "Username already exists!";
		} else {
			// The username does not exist... Continue...
			if (checkEmailExists($email)) {
				echo "Email address already exists!";
			} else {
				// Email does not exist... Continue...

				// loginUser($username, $password);

				$user_query = "INSERT INTO users (username, email, tel, password) VALUES ('$username', '$email', '$tel','$hashed_password')";

				$user_result = mysqli_query($conn, $user_query);

				if ($user_result) {

					// echo "Registration succesful";

					loginUser($username, $password);

					// header('location: dashboard.php');
				}
			}
			
		}
		

		


	}else{
		foreach ($errors as $error) {
			echo $error . "<br>";
		}
	}

}
	