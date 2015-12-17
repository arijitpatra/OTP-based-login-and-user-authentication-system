<?php 
$servername = "localhost";
$username = "root";
//$password = "password";
$dbname = "record";

$dbconnection = mysqli_connect($servername, $username, "", $dbname);

if (!$dbconnection) {
    die("Database Connection Failed " . mysqli_connect_error());
}

if(isset($_POST['next'])){
$mobile = mysqli_real_escape_string($dbconnection, $_POST['mobile']);

$query = "SELECT name FROM users WHERE mobile_number = $mobile";

//echo $query;

$result = mysqli_query($dbconnection, $query);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $username = $row["name"];
    echo "OK "."User ".$username." Mobile ".$mobile;
}
else
   echo "NOT OK";

}
mysqli_close($dbconnection);
?>