<?php
// DB Connection...
$host = 'localhost';
$db = 'testing';
$user = 'root';
$pass = 'password';

$conn = mysqli_connect($host, $user, $pass, $db) or die("Couldn't connect to the Database!");

$new = "Working";
if ($conn) {
    $users_query = "CREATE TABLE IF NOT EXISTS `users` (
        `id` INT PRIMARY KEY AUTO_INCREMENT,
        `username` VARCHAR(64) NOT NULL,
        `email` VARCHAR(64) NOT NULL,
        `tel` INT(15) NOT NULL,
        `password` VARCHAR(64) NOT NULL
        )";

    $users_result = mysqli_query($conn, $users_query);
}