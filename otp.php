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
            <p class="task-textalign-center"><span class="task-messages"><?php echo "YOUR OTP: ".$_SESSION["otp"]; ?></span></p>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <table>
                    <tr>
                        <td>
                            <input class="task-otp-unit" type="text" maxlength="1" name="one" required>
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
//echo $_SESSION["mobile"]." ".$_SESSION["otp"]." ".$_SESSION["extime"]." ".$_SESSION['sid'];

if(isset($_POST['verify'])) {
    $first = mysqli_real_escape_string($dbconnection, $_POST['one']);
    $second = mysqli_real_escape_string($dbconnection, $_POST['two']);
    $third = mysqli_real_escape_string($dbconnection, $_POST['three']);
    $fourth = mysqli_real_escape_string($dbconnection, $_POST['four']);
    $otpcheck = $first.$second.$third.$fourth;
    //echo $otpcheck;
    //echo "YOUR OTP: ".$_SESSION["otp"];
    
    if(time() < $_SESSION["extime"]) {
        if($otpcheck == $_SESSION["otp"]) {
            //echo 'Correct OTP'; //take to successful page
            //then set verified YES
            $mob = $_SESSION["mobile"];
            $otpquery = $_SESSION["otp"];
            $query = "UPDATE users SET verified = 'YES' WHERE mobile_number = $mob AND otp = $otpquery";
            mysqli_query($dbconnection, $query);
            header('location: success.php');
            session_unset();
            session_destroy();
        }
        else {
            ?>
            
        <?php
        echo '<p class="task-textalign-center"><span class="task-messages">Wrong OTP</span></p>';
        }
    }
    else {
        session_unset();
        session_destroy();
        echo '<p class="task-textalign-center"><span class="task-messages">OTP Invalid or Timed Out</span></p>';
    }
    
}
        ?>    
            
        </div>
    </body>
</html>


            
<?php
mysqli_close($dbconnection);
?>