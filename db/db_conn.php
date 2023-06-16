<?php
// DB Connection...
$host = 'localhost';
$db = 'testing';
$user = 'root';
$pass = 'password';

$conn = mysqli_connect($host, $user, $db, $pass) or die("Couldn't connect to the Database!");