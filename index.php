<?php
session_start();
if(isset($_SESSION['loginsuccess']) == true)
    header("location: success.php");
else if(isset($_SESSION['loggedin']) == true)
    header("location: login.php");
?>

<!DOCTYPE html>
<head>
    <title>Mobile Number</title>
    <link rel="stylesheet" type="text/css" href="assets/css/task.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="task-center">
        <form onsubmit="return length_check()" action="checkexisting.php" method="POST">
            <table>
                <tr><td><input type="text" class="task-input-box" id="mobile" onkeyup="maxlength_validate()" name="mobile" maxlength="10" placeholder="mobile number" required autofocus></td></tr>
                <tr><td><input type="submit" class="task-click-btn" name="next" value="next"></td></tr>
            </table>
        </form>
        <p class="task-textalign-center"><span id="message" class="task-messages"></span></p>
    </div>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
    <script type="text/javascript" src="assets/js/task.js"></script>
</body>
</html>

