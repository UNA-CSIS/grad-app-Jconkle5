<?php
    session_start();

    $count = count($_SESSION["completed"]);

    if (stripos($_SESSION["saa"], "php") !== false) {
        $phpConf = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <h1> Thank you for your submission</h1>
        <br><br>
        <?php
            if ($count >= 3 && $phpConf === true) {
                echo ("You are accepted for a phone interview.");
            } else {
                echo ("We are sorry, your application was rejected.");
            }
        ?>
    </body>
</html>