<?php
    session_start();
    
    $countFull = count($_SESSION["classList"]);
    $countComp = count($_SESSION["completed"]);

    if (($countComp / $countFull) >= 0.5) {
        $count = true;
    } else {
        $count = false;
    }

    if (stripos($_SESSION["saa"], "php") !== false) {
        $phpConf = true;
    } else {
        $phpConf = false;
    }

    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <h1> Thank you for your submission</h1>
        <br><br>
        <?php
            if ($count === true && $phpConf === true) {
                echo ("You are accepted for a phone interview.");
            } else {
                echo ("We are sorry, your application was rejected.");
            }
        ?>
    </body>
</html>