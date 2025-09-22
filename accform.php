<?php
    session_start();
    
    $_SESSION['classList'] = ["oop", "sad", "ap", "itn", "ics"];
    $_SESSION['completed'] = [];
    
    foreach ($_SESSION["classList"] as $i) {
        if (isset($_POST[$i])) {
            $_SESSION[$i] = true;
            array_push($_SESSION['completed'], $_SESSION[$i]);
        } else {
            $_SESSION[$i] = false;
        }
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
        Please explain your skills and accomplishments: <br>
    </h3>
    
    <p>
        <form action="confirmation.php" method="post">
            <textarea name="saa" rows="10" cols="50" ></textarea><br>
            <input type="submit" value="Continue"/><br>
        </form>
    </p>
</body>
</html>