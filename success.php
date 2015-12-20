<?php
session_start();
if(!(isset($_SESSION['loginsuccess']) == true))
    header("location: index.php");
?>
<html>
    <head>
        <title>Success</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/task.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="task-center">
            <p class="task-textalign-center">
                <span><i class="fa fa-smile-o task-success-icon"></i></span>
            </p>
            <p class="task-textalign-center">
                <span class="task-success-msg">successfully logged in</span>
            </p>
        </div>
    </body>
</html>
