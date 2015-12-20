<?php
session_start();
?>
<html>
    <head>
        <title>OTP</title>
        <link rel="stylesheet" type="text/css" href="assets/css/task.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="task-center">
            <p id="otp-four-digit" class="task-textalign-center"><span class="task-messages"><?php echo "YOUR OTP: " . $_SESSION["otp"]; ?></span></p>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="otp-form">
                <table>
                    <tr>
                        <td>
                            <input class="task-otp-unit" type="text" maxlength="1" name="one" required autofocus>
                            <input class="task-otp-unit" type="text" maxlength="1" name="two" required>
                            <input class="task-otp-unit" type="text" maxlength="1" name="three" required>
                            <input class="task-otp-unit" type="text" maxlength="1" name="four" required>
                        </td>
                    </tr>
                    <tr><td><input class="task-click-btn" type="submit" value="verify" name="verify"></td></tr> 
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

            if (isset($_POST['verify'])) {
                $first = mysqli_real_escape_string($dbconnection, $_POST['one']);
                $second = mysqli_real_escape_string($dbconnection, $_POST['two']);
                $third = mysqli_real_escape_string($dbconnection, $_POST['three']);
                $fourth = mysqli_real_escape_string($dbconnection, $_POST['four']);
                $otpcheck = $first . $second . $third . $fourth;   //concatenating the otp fields

                if (time() < $_SESSION["extime"]) {
                    if ($otpcheck == $_SESSION["otp"]) {
                        $mob = $_SESSION["mobile"];
                        $otpquery = $_SESSION["otp"];
                        $query = "UPDATE users SET verified = 'YES' WHERE mobile_number = $mob AND otp = $otpquery";
                        mysqli_query($dbconnection, $query);
                        $_SESSION['loginsuccess'] = true;
                        header('location: success.php');
                    } else {
                        ?>

                        <?php
                        echo '<p class="task-textalign-center"><span class="task-messages">Wrong OTP</span></p>';
                    }
                } else {
                    echo '<p class="task-textalign-center"><span class="task-messages">OTP Invalid or Timed Out</span></p>';
                    echo '<script type="text/javascript">document.getElementById("otp-form").style.display="none";document.getElementById("otp-four-digit").style.display="none";</script>';
                }
            }
            ?>    
        </div>
    </body>
</html>

<?php
mysqli_close($dbconnection);
?>