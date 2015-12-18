<?php 
session_start();
?>
    
<?php 
$servername = "localhost";
$username = "root";
//$password = "password";
$dbname = "record";

$dbconnection = mysqli_connect($servername, $username, "", $dbname);

if (!$dbconnection) {
    die("Database Connection Failed " . mysqli_connect_error());
}
echo $_SESSION["mobile"]." ".$_SESSION["otp"]." ".$_SESSION["extime"]." ".$_SESSION['sid'];

if(isset($_POST['verify'])) {
    $first = mysqli_real_escape_string($dbconnection, $_POST['one']);
    $second = mysqli_real_escape_string($dbconnection, $_POST['two']);
    $third = mysqli_real_escape_string($dbconnection, $_POST['three']);
    $fourth = mysqli_real_escape_string($dbconnection, $_POST['four']);
    $otpcheck = $first.$second.$third.$fourth;
    echo $otpcheck;
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