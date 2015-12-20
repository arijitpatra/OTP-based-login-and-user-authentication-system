<?php
session_start();
if((isset($_SESSION['loginsuccess']) == true))
    header("location: success.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/task.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="task-login-center">
            <p class="task-textalign-center">
                <span class="fa-stack fa-lg task-user-icon">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-user fa-stack-1x fa-inverse" ></i>
                </span>
                <br>
                <span class="task-message"><?php echo $_SESSION["name"] ?></span>
            </p>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <table>
                    <tr><td><input class="task-form-fields" type="password" name="passcheck" placeholder="password" required autofocus></td></tr>
                    <tr><td><input class="task-click-btn" type="submit" name="login" value="login"></td></tr>
                </table>
            </form>

            <?php
            $servername = "localhost";
            $username = "root";
            //$password = "password";
            $dbname = "record";

            $dbconnection = mysqli_connect($servername, $username, "", $dbname);

            if (!$dbconnection) {
                die("Database Connection Failed " . mysqli_connect_error());
            }

            if (isset($_POST['login'])) {
                $passcheck = mysqli_real_escape_string($dbconnection, $_POST['passcheck']);

                if ($passcheck == $_SESSION["pass"]) {
                    $_SESSION['loginsuccess'] = true;
                    header('location: success.php');
                } else {
                    echo '<p class="task-textalign-center"><span class="task-messages">Wrong Password</span></p>';
                }
            }
            ?>
        </div>
    </body>    
</html>    

<?php
mysqli_close($dbconnection);
?>