<?php
// Checking if username already exists...
function checkUsernameExists($username) {

    require("./db/db_conn.php");

    $userUsername_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";

    $userUsername_result = mysqli_query($conn, $userUsername_query);

    if ($userUsername_result) {

        if (mysqli_num_rows($userUsername_result) == 1) {
            // The user exists...
            return true;
        }else{
            // The user does not exist...
            return false;
        }
    } else {
        echo "We couldn't run query: " . mysqli_error($conn);
    }
    
}



// Checking if email exists...
function checkEmailExists($email) {

    require("./db/db_conn.php");

    $userEmail_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";

    $userEmail_result = mysqli_query($conn, $userEmail_query);

    if ($userEmail_result) {

        if (mysqli_num_rows($userEmail_result) == 1) {
            // The user exists...
            return true;
        }else{
            // The user does not exist...
            return false;
        }
    } else {
        echo "We couldn't run query: " . mysqli_error($conn);
    }
    
}




function loginUser($username, $password){

    require("./db/db_conn.php");

    $login_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $login_result = mysqli_query($conn, $login_query);

    if ($login_result) {
        // print_r($login_result);
        if (mysqli_num_rows($login_result) == 1) {
            // code...
            $userData = mysqli_fetch_array($login_result, MYSQLI_ASSOC);
            // print_r($userData);

            $pass_ver = password_verify($password, $userData['password']);

            // print_r($pass_ver);

            if ($pass_ver) {

                session_start();

                $_SESSION['user'] = $userData;
                $_SESSION['testing'] = "Just for test sake!";

                // print_r($_SESSION['user']);

                header('location: ./dashboard.php');
            }else{
                echo "Incorrect password!";
            }
        }else{
            // The username was not found...
            echo "Username not found!";
        }
    }else{
        // code...
    }
}