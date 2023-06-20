<?php

require_once("./db/db_conn.php");

function checkUserExists($username, $email) {
    $userCheck_query = "SELECT * FROM users WHERE username='$username' AND email='$email' LIMIT 1";

    $userCheck_result = mysqli_query($conn, $userCheck_query);
}

