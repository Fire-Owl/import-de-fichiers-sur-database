<?php
    session_start();
    echo $_SESSION['success'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <a href="test.php">TEST À LA PAGE TEST</a>
        <h1>
            <?php
                echo 'bonjour '.$_SESSION['user_name'].' ! ';
            ?>
        </h1>
    </body>
</html>