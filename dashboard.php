<?php

    session_start();
    // print_r($_SESSION);

    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
    }else{
        // User not logged in...
        header('location: ./login.php');
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<?php
    include_once("./includes/head.include.php");
?>
<body>
    <?php include_once("./includes/header.include.php"); ?>

    <h3>Welcome, <?php echo $user['username'] ?></h3>

    <a href="./logout.php">Logout</a>

<?php include_once('./includes/footer.include.php'); ?>
</body>
</html>