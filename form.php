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
		<input type="text" name="username" placeholder="Username"><br>
		<input type="email" name="email" placeholder="Email"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<input type="password" name="confirm" placeholder="Confrim Password"><br>
		<label><input type="checkbox" name="agree"> I agree to the terms.</label><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>