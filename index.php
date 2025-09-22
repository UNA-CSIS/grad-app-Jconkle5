<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        if (empty($_SESSION["first"]) && (empty($_SESSION["first"]))) {
            echo ("Please enter your first and last name.");
        } else {
            echo ("Hello " . $_SESSION["first"] . " " . $_SESSION["last"]);
        }
    ?>

    <p>
        <form action="checklist.php" method="post">
            <label for="first" >First Name </label>
            <input type="text" name="first" id="first" required/>

            <label for="last" >Last Name </label>
            <input type="text" name="last" id="fast" required/>

            <input type="submit" value="Continue"/>
        </form>
    </p>
</body>
