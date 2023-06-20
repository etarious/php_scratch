<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Handling with PHP</title>
</head>
<body>
	<h1>Signup form</h1>

	<?php
		// require_once('./db/db_conn.php');
		require_once("./functions/signin_processing.php");
	?>

	<form method="post">
		<input type="text" name="username" placeholder="Username" value="<?php if(isset($_POST['username'])) {echo $_POST['username'];} ?>"><br>
		<input type="email" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])) {echo $_POST['email'];} ?>"><br>
		<input type="tel" name="tel" id="tel" placeholder="Phone number" value="<?php if(isset($_POST['tel'])) {echo $_POST['tel'];} ?>"><br>
		<input type="password" name="password" placeholder="Password" value="<?php if(isset($_POST['password'])) {echo $_POST['password'];} ?>"><br>
		<input type="password" name="confirm" placeholder="Confirm Password" value="<?php if(isset($_POST['confirm'])) {echo $_POST['confirm'];} ?>"><br>
		<!-- <label><input type="checkbox" name="agree"> I agree to the terms.</label><br> -->
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>