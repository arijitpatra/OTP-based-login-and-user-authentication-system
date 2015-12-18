<?php 
session_start();
?>
<html>
    <head>
        <title>Success</title>
    </head>
    <body>
        <p>SUCCESS Message: </p>
        <?php echo $_SESSION["mobile"]." ".$_SESSION["name"]." ".$_SESSION["pass"]; ?>
    </body>
</html>
