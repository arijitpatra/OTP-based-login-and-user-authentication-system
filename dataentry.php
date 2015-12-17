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
$mobile = mysqli_real_escape_string($dbconnection, $_POST['mobile']);
$password = mysqli_real_escape_string($dbconnection, $_POST['pass']);

date_default_timezone_set("Asia/Calcutta");
$registeredon = date("d/m/Y")." ".date("h:i:sa");


$query = "INSERT INTO users (name, mobile_number, password, registered_on) VALUES ('$name', '$mobile', '$password', '$registeredon')";

if (mysqli_query ($dbconnection, $query)) 
    echo "OK";
else
    echo "NOT OK";

mysqli_close($dbconnection);
?>