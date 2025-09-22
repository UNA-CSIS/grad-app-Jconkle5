<?php
    session_start();   

    if (isset($_POST["saa"])) {
        $_SESSION["saa"] = $_POST["saa"];
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirmation</title>
</head>
<body>
    <h3>
        Thank you for your submission, <?php echo($_SESSION["first"] . " please review your information, then submit."); ?>
    </h3>
    <p>
        Completed Courses:
        <ul>
        <?php
            if ($_SESSION["oop"] === true) {
                echo("<li>Object-oriented programming</li>");
            }
            if ($_SESSION["sad"] === true) {
                echo("<li>Systems analysis & design</li>");
            }
            if ($_SESSION["ap"] === true) {
                echo("<li>Advanced programming</li>");
            }
            if ($_SESSION["itn"] === true) {
                echo("<li>Introduction to Networking</li>");
            }
            if ($_SESSION["ics"] === true) {
                echo("<li>Introduction to Computer Security</li>");
            }
        ?>
        </ul>

        Skills and Accomplishments: <br>
        <?php
            echo($_SESSION["saa"]);
        ?>
        <br><br>
        If this is correct and complete, submit to see your results. <br><br>
        <form action="aorpage.php" method="post">
            <input type="submit" value="Submit"/>
        </form>
    </p>
</body>
</html>