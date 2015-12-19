<?php 
session_start();
?>
<html>
    <head>
        <title>OTP</title>
    </head>
    <body>
        <?php echo "YOUR OTP: ".$_SESSION["otp"]; ?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <table>
                <tr>
                    <td><input type="password" maxlength="1" name="one" required></td>
                    <td><input type="password" maxlength="1" name="two" required></td>
                    <td><input type="password" maxlength="1" name="three" required></td>
                    <td><input type="password" maxlength="1" name="four" required></td></tr>
                    <tr><td><input type="submit" value="verify" name="verify"></td></tr> 
                          </table>
        </form>
    </body>
</html>

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
    echo "YOUR OTP: ".$_SESSION["otp"];
    
    if(time() < $_SESSION["extime"]) {
        if($otpcheck == $_SESSION["otp"]) {
            //echo 'Correct OTP'; //take to successful page
            //then set verified YES
            $mob = $_SESSION["mobile"];
            $otpquery = $_SESSION["otp"];
            $query = "UPDATE users SET verified = 'YES' WHERE mobile_number = $mob AND otp = $otpquery";
            mysqli_query($dbconnection, $query);
            header('location: success.php');
        }
        else {
            echo 'Wrong OTP';
        }
    }
    else {
        echo 'TIME is 5+ mins';
    }
    
}

mysqli_close($dbconnection);
?>