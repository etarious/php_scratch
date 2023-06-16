<!DOCTYPE html>
<html>
<?php
    require_once("./includes/head.include.php");
?>
<body>
    <?php
        require_once("./includes/header.include.php");
    ?>
    <hr>



    <?php
    // echo readfile("./assets/files/test.txt");

    // $myfile = fopen("./assets/files/test.txt", "r") or die("Unable to open file!");
    // echo fread($myfile, filesize("./assets/files/test.txt"));
    // fclose($myfile);

        require_once("./includes/prod.include.php");
    ?>

    <h2>These are the users below;</h1>


    <table>
        <tr>
            <th>Names</th>
            <th>Age</th>
            <th>Class</th>
        </tr>
        <?php
        include_once("./db/db.php");
            for ($i=0; $i < count($users); $i++) { 
                $userName = $users[$i];

                echo "<tr>
                    <td>" . $userName["name"] . "</td>
                    <td>" . $userName["age"] . "</td>
                    <td>" . $userName["clas"] . "</td>
                </tr>";
            };
        ?>
    </table>

    <h3>The area of the circle is:</h3>
    <?php require_once("./functions/area.php"); 
        echo area_circle(3);
    ?>



    <hr>

    <?php
        require_once("./includes/footer.include.php");
    ?>
</body>
</html>