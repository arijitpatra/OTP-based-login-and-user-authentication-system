<?php 
session_start();
?>
<html>
    <head>
        <title>Success</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
    <body>
        <p>
            <span><i class="fa fa-smile-o" style="font-size: 100px"></i></span>
        </p>
        <p>
            <span>successfully logged in</span>
        </p>
        <?php //echo $_SESSION["mobile"]." ".$_SESSION["name"]." ".$_SESSION["pass"]; ?>
    </body>
</html>
