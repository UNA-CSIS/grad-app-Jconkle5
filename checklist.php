<?php
session_start();

    if (isset($_POST["first"])) {
        $_SESSION["first"] = $_POST["first"];
        $_SESSION["last"] = $_POST["last"];
    }

?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <H1><?php echo("Welcome " . $_SESSION["first"] . " " . $_SESSION["last"]); ?></H1>

        <h3>Please select your completed courses</h3> <br>
        <form action="accform.php" method="post">
            <input type="checkbox" name="oop">Object-oriented programming</input><br>
            <input type="checkbox" name="sad">Systems analysis & design</input><br>
            <input type="checkbox" name="ap" >Advanced programming</input><br>
            <input type="checkbox" name="itn">Introduction to Networking</input><br>
            <input type="checkbox" name="ics">Introduction to Computer Security</input><br>

            <input type="submit" value="Continue"/>
        </form>
    </body>
</html> 