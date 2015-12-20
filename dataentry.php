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

$name = mysqli_real_escape_string($dbconnection, $_POST['name']);
$mobile = $_SESSION["mobile"];
$password = mysqli_real_escape_string($dbconnection, $_POST['pass']);

date_default_timezone_set("Asia/Calcutta");
$registeredon = date("d/m/Y") . " " . date("h:i:sa");

$curr_time = time();                       // current time
$exp_time = $curr_time + (5 * 60);         // 5 times 60 seconds gives me 5 minutes as per problem, adding this with current gives me expiration time
$otp = mt_rand(1000, 9999);                // setting min 1000 max 9999 , mt_rand() is better and faster than rand()

$query = "INSERT INTO users (name, mobile_number, password, registered_on, otp, expiration_date) VALUES ('$name', '$mobile', '$password', '$registeredon', '$otp', '$exp_time')";

if (mysqli_query($dbconnection, $query)) {
    $_SESSION["name"] = $name;
    $_SESSION["mobile"] = $mobile;
    $_SESSION["pass"] = $password;
    $_SESSION["otp"] = $otp;
    $_SESSION["extime"] = $exp_time;
    $_SESSION['sid'] = session_id();
    
    header('location: otp.php');
} else {
    header('location: signup.php');
}

mysqli_close($dbconnection);
?>